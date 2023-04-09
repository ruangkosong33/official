<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidata extends Model
{
    use HasFactory;

    protected $table='sidatas';

    protected $fillable=['title_sidata', 'slug', 'file_sidata'];

    protected $hidden=[];
}
