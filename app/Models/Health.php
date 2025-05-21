<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    /** @use HasFactory<\Database\Factories\HealthFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'name',
        'slug',
        'description',
        'address',
        'phone',
        'email',
        'website',
        'image',
        'category_id',
        'place_id',
        'opening_time',
        'closing_time',
        'logo',
        'tags',
        'gmap',
        'description_tags',
        'health_type',
        'health_price',
        'health_capacity',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'opening_time' => 'datetime',
        'closing_time' => 'datetime',
        'tags' => 'array',
        'gmap' => 'array',
        'description_tags' => 'array',
        'health_type' => 'string',
        'health_price' => 'string',
        'health_capacity' => 'string',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
