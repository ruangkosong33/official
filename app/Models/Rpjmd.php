<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpjmd extends Model
{
    use HasFactory;

    protected $table='rpjmds';

    protected $fillable=['title_rpjmd', 'slug', 'year', 'file_rpjmd'];

    protected $hidden=[];
}
