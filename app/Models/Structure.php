<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $table='structures';

    protected $fillable=['title_structure', 'slug', 'image_structure'];

    protected $hidden=[];
}
