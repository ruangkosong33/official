<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actionplan extends Model
{
    use HasFactory;

    protected $table='actionplans';

    protected $fillable=['title_actionplan', 'slug', 'file_actionplan'];

    protected $hidden=[];

}
