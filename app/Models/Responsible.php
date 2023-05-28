<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $table='responsibles';

    protected $fillable=['title_responsible', 'slug', 'file_responsible'];

    protected $hidden=[];
}
