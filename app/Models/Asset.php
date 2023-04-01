<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table='assets';

    protected $fillable=['title_asset', 'slug', 'file_asset'];

    protected $hidden=[];
}
