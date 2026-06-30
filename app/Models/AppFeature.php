<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppFeature extends Model
{
    protected $fillable = [
        'app_id',
        'title',
        'description',
        'icon',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'app_id' => 'integer',
            'sort_order' => 'integer',
        ];
    }

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }
}
