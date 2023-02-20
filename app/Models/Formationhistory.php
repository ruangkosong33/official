<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formationhistory extends Model
{
    use HasFactory;

    protected $table='formationhistorys';

    protected $fillable=['title_formationhistory', 'slug', 'description_formationhistory'];

    protected $hidden=[];
}
