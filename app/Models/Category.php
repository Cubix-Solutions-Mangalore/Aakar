<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
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
        'icon-class',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'icon-class' => 'string'
    ];


    public function shopping()
    {
        return $this->hasMany(Shopping::class);
    }

    public function accomadations()
    {
        return $this->hasMany(Accomodation::class);
    }

    public function entertainments()
    {
        return $this->hasMany(Entertainment::class);
    }
    public function food()
    {
        return $this->hasMany(Food::class);
    }
    public function health()
    {
        return $this->hasMany(Health::class);
    }

    

}
