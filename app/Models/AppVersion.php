<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppVersion extends Model
{
    protected $fillable = [
        'app_id',
        'version',
        'release_date',
        'release_notes',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'app_id' => 'integer',
            'release_date' => 'date',
            'sort_order' => 'integer',
        ];
    }

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderByDesc('release_date')->orderBy('sort_order');
    }
}
