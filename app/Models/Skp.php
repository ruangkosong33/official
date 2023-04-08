<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    use HasFactory;

    protected $table='skps';

    protected $fillable=['title_skp', 'slug', 'file_skp'];

    protected $hidden=[];
}
