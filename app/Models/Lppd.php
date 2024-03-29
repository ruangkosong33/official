<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lppd extends Model
{
    use HasFactory;

    protected $table='lppds';

    protected $fillable=['title_lppd', 'slug', 'year', 'file_lppd'];

    protected $hidden=[];
}
