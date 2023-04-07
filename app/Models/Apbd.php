<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apbd extends Model
{
    use HasFactory;

    protected $table='apbds';

    protected $fillable=['periode', 'slug', 'year'];

    protected $hidden=[];


    public function city()
    {
        return $this->hasMany(City::class, 'city_id', 'id');
    }
}