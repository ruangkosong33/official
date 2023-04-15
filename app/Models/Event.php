<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table='events';

    protected $fillable=['title_event', 'slug', 'data_event', 'description_event', 'place'];

    protected $hidden=[];
}
