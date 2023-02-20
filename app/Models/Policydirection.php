<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policydirection extends Model
{
    use HasFactory;

    protected $table='policydirections';

    protected $fillable=['title_policydirection', 'slug', 'description_policydirection'];

    protected $hidden=[];
}
