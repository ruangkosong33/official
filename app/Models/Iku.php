<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    use HasFactory;

    protected $table='ikus';

    protected $fillable=['title_iku', 'slug', 'year', 'file_iku'];

    protected $hidden=[];
}
