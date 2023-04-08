<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renja extends Model
{
    use HasFactory;

    protected $table='renjas';

    protected $fillable=['title_renja', 'slug', 'year', 'file_renja'];

    protected $hidden=[];
}
