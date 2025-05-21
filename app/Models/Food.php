<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /** @use HasFactory<\Database\Factories\FoodFactory> */
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
        'food_type',
        'food_price',
        'food_capacity',
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
        'food_type' => 'string',
        'food_price' => 'string',
        'food_capacity' => 'string',
        'image' => 'array',
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
