<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goalobjective extends Model
{
    use HasFactory;

    protected $table='goalobjectives';

    protected $fillable=['title_goalobjective', 'slug', 'description_goalobjective'];

    protected $hidden=[];
}
