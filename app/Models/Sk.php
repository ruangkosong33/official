<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    use HasFactory;

    protected $table='sks';

    protected $fillable=['title_sk', 'slug', 'file_sk'];

    protected $hidden=[];
}
