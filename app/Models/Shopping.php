<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    /** @use HasFactory<\Database\Factories\ShoppingFactory> */
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
        'shopping_type',
        'shopping_price',
        'shopping_capacity',    
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
        'shopping_type' => 'string',
        'shopping_price' => 'string',
        'image' => 'array',
        'shopping_capacity' => 'string',
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
