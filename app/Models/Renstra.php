<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renstra extends Model
{
    use HasFactory;

    protected $table='renstras';

    protected $fillable=['title_renstra', 'slug', 'year', 'file_renstra'];

    protected $hidden=[];
}
