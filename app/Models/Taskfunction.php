<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskfunction extends Model
{
    use HasFactory;
    
    protected $table='taskfunctions';

    protected $fillable=['title_taskfunction', 'slug', 'description_taskfunction'];

    protected $hidden=[];
}
