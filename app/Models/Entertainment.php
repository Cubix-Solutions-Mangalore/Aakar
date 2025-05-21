<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    /** @use HasFactory<\Database\Factories\EntertainmentFactory> */
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
        'entertainment_type',
        'entertainment_price',
        'entertainment_capacity',
    ];

      protected $casts = [
        'opening_time' => 'datetime',
        'closing_time' => 'datetime',
        'tags' => 'array',
        'gmap' => 'array',
        'description_tags' => 'array',
        'entertainment_type' => 'string',
        'entertainment_price' => 'string',
        'entertainment_capacity' => 'string',
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
