<?php

namespace App\Domain\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static whereSlug(string $string)
 * @method static \Illuminate\Database\Query\Builder create(array $array)
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
