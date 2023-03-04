<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;

    protected $table='bansoss';

    protected $fillable=['title_bansos', 'slug', 'file_bansos'];

    protected $hidden=[];
}
