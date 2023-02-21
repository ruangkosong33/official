<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceorder extends Model
{
    use HasFactory;

    protected $table='serviceorders';

    protected $fillable=['title_serviceorder', 'slug', 'description_serviceorder'];

    protected $hidden=[];
}
