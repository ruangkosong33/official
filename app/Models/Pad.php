<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pad extends Model
{
    use HasFactory;

    protected $table='pads';

    protected $fillable=['title_pad', 'slug', 'filename_pad', 'description_pad'];

    protected $hidden=[];
}
