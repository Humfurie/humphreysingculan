<?php

namespace Domain\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubMenu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'menu_section_id',
        'name',
        'slug',
        'icon'
    ];

    public function menuSection(): BelongsTo
    {
        return $this->belongsTo(MenuSection::class);
    }
}
