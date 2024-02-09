<?php

namespace Domain\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuSection extends Model
{
    protected $fillable = [
        'menu_id',
        'name',
        'slug'
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function subMenus(): HasMany
    {
        return $this->hasMany(SubMenu::class);
    }
}
