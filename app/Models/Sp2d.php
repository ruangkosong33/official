<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sp2d extends Model
{
    use HasFactory;

    protected $table='sp2ds';

    protected $fillable=['city_kab', 'title_sp2d', 'slug', 'file_sp2d', 'date', 'description', 'total'];

    protected $hidden=[];
}
