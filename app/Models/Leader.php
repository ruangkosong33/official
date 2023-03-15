<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $table='leaders';

    protected $fillable=['name_leader', 'slug', 'image_leader', 'periode'];

    protected $hidden=[];
}

