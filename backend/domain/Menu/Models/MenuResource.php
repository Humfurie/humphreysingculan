<?php

namespace Domain\Menu\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuResource extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'menu_categories_id',
        'name',
        'slug',
        'prefix',
        'namespace',
        'middleware',
    ];

    public function menuCategory(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class);
    }

    public function controllerResources(): HasMany
    {
        return $this->hasMany(ControllerResource::class);
    }
}
