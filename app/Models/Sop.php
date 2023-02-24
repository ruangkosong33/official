<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    use HasFactory;

    protected $table='sops';

    protected $fillable=['title_sop', 'slug', 'description_sop', 'image_sop', 'file_sop'];

    protected $hidden=[];
}
