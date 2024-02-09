<?php

namespace Domain\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static whereSlug(string $string)
 */
class Menu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function menuSections(): HasMany
    {
        return $this->hasMany(MenuSection::class);
    }
}
