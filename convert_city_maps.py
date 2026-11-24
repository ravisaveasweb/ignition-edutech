
import json
import math
import re
from pathlib import Path

from shapely.geometry import shape, Polygon, MultiPolygon, GeometryCollection
from shapely.ops import unary_union

# --------------------------------------------------
# 1. UPDATE THIS PATH TO YOUR EXTRACTED ZIP FOLDER
# --------------------------------------------------
SOURCE_DIR = Path(
    r"C:\Users\user\Downloads\Municipal_Spatial_Data-master\Municipal_Spatial_Data-master"
)

# --------------------------------------------------
# 2. OUTPUT FOLDER INSIDE YOUR LARAVEL PROJECT
# --------------------------------------------------
PROJECT_DIR = Path(__file__).resolve().parent

OUTPUT_DIR = (
    PROJECT_DIR
    / "public"
    / "img"
    / "study-india"
    / "maps"
    / "cities"
)

# City name: possible source-folder names
CITY_SOURCES = {
    "New Delhi": ["Delhi"],
    "Gurgaon": ["Gurgaon", "Gurugram"],
    "Noida": ["Noida"],
    "Mumbai": ["Mumbai"],
    "Chennai": ["Chennai"],
    "Kolkata": ["Kolkata"],
    "Hyderabad": ["Hyderabad"],
    "Bangalore": ["Bangalore", "Bengaluru"],
    "Pune": ["Pune"],
    "Ahmedabad": ["Ahmedabad"],
    "Lucknow": ["Lucknow"],
    "Coimbatore": ["Coimbatore"],
    "Jaipur": ["Jaipur"],
    "Chandigarh": ["Chandigarh"],
    "Indore": ["Indore"],
    "Bhopal": ["Bhopal"],
}


def normalize(value):
    return re.sub(r"[^a-z0-9]", "", value.lower())


def find_source(city, aliases):
    """Find a GeoJSON file inside a matching city folder."""

    alias_names = {normalize(alias) for alias in aliases}
    candidates = []

    for file in SOURCE_DIR.rglob("*"):
        if not file.is_file():
            continue

        if file.suffix.lower() not in {".geojson", ".json"}:
            continue

        relative = file.relative_to(SOURCE_DIR)

        matching_folder = any(
            normalize(part) in alias_names
            for part in relative.parts[:-1]
        )

        matching_filename = (
            normalize(file.stem) in alias_names
        )

        if matching_folder or matching_filename:
            candidates.append(file)

    if not candidates:
        return None

    # Prefer a GeoJSON file, then the largest matching file.
    candidates.sort(
        key=lambda file: (
            file.suffix.lower() == ".geojson",
            file.stat().st_size,
        ),
        reverse=True,
    )

    return candidates[0]


def read_geometries(data):
    """Read standard GeoJSON Feature, FeatureCollection or geometry."""

    if data.get("type") == "FeatureCollection":
        features = data.get("features", [])
        return [
            shape(feature["geometry"])
            for feature in features
            if feature.get("geometry")
        ]

    if data.get("type") == "Feature":
        geometry = data.get("geometry")
        return [shape(geometry)] if geometry else []

    if data.get("type"):
        return [shape(data)]

    return []


def extract_polygons(geometry):
    if geometry.is_empty:
        return []

    if isinstance(geometry, Polygon):
        return [geometry]

    if isinstance(geometry, MultiPolygon):
        return list(geometry.geoms)

    if isinstance(geometry, GeometryCollection):
        polygons = []

        for item in geometry.geoms:
            polygons.extend(extract_polygons(item))

        return polygons

    return []


def create_svg(geometry, city_name):
    """Fit geographic polygon boundaries inside a 120 x 100 SVG."""

    polygons = extract_polygons(geometry)

    if not polygons:
        raise ValueError("No polygon boundaries found.")

    all_coords = [
        (x, y)
        for polygon in polygons
        for x, y in polygon.exterior.coords
    ]

    mean_lat = sum(y for _, y in all_coords) / len(all_coords)
    longitude_factor = math.cos(math.radians(mean_lat))

    projected = [
        (x * longitude_factor, y)
        for x, y in all_coords
    ]

    min_x = min(x for x, _ in projected)
    max_x = max(x for x, _ in projected)
    min_y = min(y for _, y in projected)
    max_y = max(y for _, y in projected)

    width = 120
    height = 100
    padding = 5

    scale = min(
        (width - 2 * padding) / max(max_x - min_x, 1e-12),
        (height - 2 * padding) / max(max_y - min_y, 1e-12),
    )

    def project_point(lon, lat):
        px = padding + (lon * longitude_factor - min_x) * scale
        py = height - padding - (lat - min_y) * scale
        return px, py

    path_parts = []

    for polygon in polygons:
        # Include interior rings so holes are preserved.
        for ring in [polygon.exterior, *polygon.interiors]:
            commands = []

            for index, (lon, lat) in enumerate(ring.coords):
                px, py = project_point(lon, lat)
                command = "M" if index == 0 else "L"
                commands.append(f"{command}{px:.2f},{py:.2f}")

            commands.append("Z")
            path_parts.append(" ".join(commands))

    path_data = " ".join(path_parts)

    return f'''<svg xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 120 100"
    role="img"
    aria-label="{city_name} municipal boundary">
    <path d="{path_data}"
        fill="#eb933a"
        fill-rule="evenodd"
        stroke="#0a2540"
        stroke-width="1.2"
        stroke-linejoin="round"/>
</svg>
'''


def convert_city(city, aliases):
    source = find_source(city, aliases)

    if source is None:
        print(f"NOT FOUND: {city} - no matching source file")
        return

    try:
        with source.open("r", encoding="utf-8-sig") as file:
            data = json.load(file)

        geometries = read_geometries(data)
        polygons = []

        for geometry in geometries:
            polygons.extend(extract_polygons(geometry))

        if not polygons:
            print(f"NO POLYGONS: {city} - {source}")
            return

        # Merge ward polygons into a combined municipal outline.
        combined = unary_union(polygons)

        svg_content = create_svg(combined, city)

        filename = normalize(city)
        output_file = OUTPUT_DIR / f"{filename}.svg"

        OUTPUT_DIR.mkdir(parents=True, exist_ok=True)
        output_file.write_text(svg_content, encoding="utf-8")

        print(f"CREATED: {output_file.name}")
        print(f"         Source: {source}")

    except Exception as error:
        print(f"ERROR: {city}: {error}")


if not SOURCE_DIR.exists():
    raise SystemExit(
        f"Source folder does not exist:\n{SOURCE_DIR}\n"
        "Update SOURCE_DIR to your extracted dataset folder."
    )

OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

for city, aliases in CITY_SOURCES.items():
    convert_city(city, aliases)

print("\nFinished processing city boundary data.")
print(f"SVG output folder: {OUTPUT_DIR}")
