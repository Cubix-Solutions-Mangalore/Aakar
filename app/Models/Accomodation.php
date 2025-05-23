<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    /** @use HasFactory<\Database\Factories\AccomodationFactory> */
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
        'room_type',
        'room_price',
        'room_capacity',
        'room_amenities',
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
        'room_type' => 'string',
        'room_price' => 'string',
        'room_capacity' => 'string',
        'room_amenities' => 'string',
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
