<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $table='asets';

    protected $fillable=['title_aset', 'slug', 'description_aset', 'filename_pad'];

    protected $hideen=[];
}
