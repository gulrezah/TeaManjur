<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class App extends Model
{
    protected $fillable = [
        'app_category_id',
        'name',
        'slug',
        'tagline',
        'short_description',
        'description',
        'icon',
        'hero_image',
        'app_store_url',
        'privacy_policy_url',
        'support_url',
        'sort_order',
        'is_featured',
        'is_published',
        'seo_title',
        'seo_description',
    ];

    protected function casts(): array
    {
        return [
            'app_category_id' => 'integer',
            'sort_order' => 'integer',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    public function appCategory(): BelongsTo
    {
        return $this->belongsTo(AppCategory::class);
    }

    public function appFeatures(): HasMany
    {
        return $this->hasMany(AppFeature::class);
    }

    public function appScreenshots(): HasMany
    {
        return $this->hasMany(AppScreenshot::class);
    }

    public function appVersions(): HasMany
    {
        return $this->hasMany(AppVersion::class);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
