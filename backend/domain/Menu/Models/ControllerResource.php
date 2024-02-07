<?php

namespace Domain\Menu\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControllerResource extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'menu_resources_id',
        'method',
        'uri',
        'action',
    ];

    public function menuResource(): BelongsTo
    {
        return $this->belongsTo(MenuResource::class);
    }
}
