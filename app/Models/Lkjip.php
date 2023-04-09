<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lkjip extends Model
{
    use HasFactory;

    protected $table='lkjips';

    protected $fillable=['title_lkjip', 'slug', 'year', 'file_lkjip'];

    protected $hidden=[];
}
