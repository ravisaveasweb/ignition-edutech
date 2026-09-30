<?php

namespace App\Filament\Resources\Universities\Schemas;

use App\Models\City;
use App\Models\University;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UniversityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Wizard::make([
                Step::make('Basic Information')
                    ->icon('heroicon-o-building-library')
                    ->schema([
                        TextInput::make('name')->label('University Name')->required()->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                            $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        TextInput::make('slug')->required()->disabled()->dehydrated()
                            ->maxLength(255)->unique(University::class, 'slug', ignoreRecord: true),
                        Select::make('university_type')->options([
                            'Central University' => 'Central University',
                            'State University' => 'State University',
                            'Private University' => 'Private University',
                            'Deemed University' => 'Deemed University',
                            'Open University' => 'Open University',
                            'Other' => 'Other',
                        ])->searchable(),
                        Select::make('ownership')->options([
                            'Government' => 'Government',
                            'Private' => 'Private',
                            'Public' => 'Public',
                            'Deemed' => 'Deemed',
                        ])->searchable(),
                        TextInput::make('established_year')->numeric()->minValue(1000)->maxValue((int) date('Y')),
                        TextInput::make('accreditation'),
                        Textarea::make('short_description')->rows(3)->columnSpanFull(),
                        Textarea::make('description')->rows(8)->columnSpanFull(),
                    ])->columns(2),

                Step::make('Location & Contact')
                    ->icon('heroicon-o-map-pin')
                    ->schema([
                        Select::make('state_id')->label('State')->relationship('state', 'name')
                            ->searchable()->preload()->live()
                            ->afterStateUpdated(fn(Set $set) => $set('city_id', null))->required(),
                        Select::make('city_id')->label('City')
                            ->options(fn($get): Collection => City::query()
                                ->where('state_id', $get('state_id'))->pluck('name', 'id'))
                            ->searchable()->disabled(fn($get): bool => ! $get('state_id'))->required(),
                        Textarea::make('address')->rows(3)->columnSpanFull(),
                        TextInput::make('pincode')->maxLength(20),
                        TextInput::make('phone')->tel(),
                        TextInput::make('email')->email(),
                        TextInput::make('website')->url(),
                    ])->columns(2),

                Step::make('Media')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('logo')->collection('logo')->image()->imageEditor()
                            ->maxSize(2048)->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])->downloadable()->openable(),
                        SpatieMediaLibraryFileUpload::make('banner')->collection('banner')->image()->imageEditor()
                            ->maxSize(4096)->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])->downloadable()->openable(),
                        SpatieMediaLibraryFileUpload::make('gallery')->collection('gallery')->multiple()->image()
                            ->reorderable()->maxFiles(20)->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])->downloadable()->openable()
                            ->columnSpanFull(),
                        SpatieMediaLibraryFileUpload::make('brochure')->collection('brochure')
                            ->acceptedFileTypes(['application/pdf'])->maxSize(10240)->downloadable()->openable(),
                    ])->columns(2),

                Step::make('Academics')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        TextInput::make('ranking')->numeric()->minValue(1),
                    ]),

                Step::make('Placement Summary')
                    ->icon('heroicon-o-chart-bar')
                    ->schema([
                        TextInput::make('average_package')->numeric()->prefix('₹'),
                        TextInput::make('highest_package')->numeric()->prefix('₹'),
                        TextInput::make('placement_percentage')->numeric()->minValue(0)->maxValue(100)->suffix('%'),
                    ])->columns(3),

                Step::make('SEO')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema([
                        Group::make()->relationship('seoMeta')->schema([
                            TextInput::make('title')->label('Meta Title')->maxLength(255),
                            Textarea::make('description')->label('Meta Description')->rows(3),
                            Textarea::make('keywords')->label('Keywords'),
                            TextInput::make('canonical_url')->url(),
                            TextInput::make('og_title')->label('OG Title'),
                            Textarea::make('og_description')->label('OG Description')->rows(3),
                            TextInput::make('og_image')->label('OG Image URL')->url(),
                        ])->columns(2)->columnSpanFull(),
                    ]),

                Step::make('Settings')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->schema([
                        Toggle::make('status')->label('Active')->default(true),
                        Toggle::make('featured')->label('Featured University')->default(false),
                    ])->columns(2),
            ])
                ->columnSpanFull()
                ->persistStepInQueryString(),
        ]);
    }
}
