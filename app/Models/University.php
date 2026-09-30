<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class University extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'state_id',
        'city_id',
        'name',
        'slug',
        'description',
        'short_description',
        'established_year',
        'university_type',
        'ownership',
        'accreditation',
        'average_package',
        'highest_package',
        'placement_percentage',
        'ranking',
        'address',
        'pincode',
        'phone',
        'email',
        'website',
        'featured',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'featured' => 'boolean',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_university')
            ->withPivot(['fees', 'seats']);
    }

    public function accreditations()
    {
        return $this->belongsToMany(Accreditation::class, 'accreditation_university');
    }

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function placements()
    {
        return $this->hasMany(UniversityPlacement::class);
    }
    public function recruiters()
    {
        return $this->hasMany(UniversityRecruiter::class);
    }
    public function facilities()
    {
        return $this->hasMany(UniversityFacility::class);
    }
    public function admissions()
    {
        return $this->hasMany(UniversityAdmission::class);
    }
    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
        $this->addMediaCollection('banner')->singleFile();
        $this->addMediaCollection('gallery');
        $this->addMediaCollection('brochure')->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit(Fit::Crop, 300, 300);
        $this->addMediaConversion('banner')->fit(Fit::Crop, 1200, 400);
    }
}
