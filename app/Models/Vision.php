<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    use HasFactory;

    protected $table='visions';

    protected $fillable=['title_vision', 'slug', 'description_vision'];

    protected $hidden=[];
}
