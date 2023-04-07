<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transparency extends Model
{
    use HasFactory;

    protected $table='transparencys';

    protected $fillable=['title_transparency', 'slug'];

    protected $hidden=[];


    public function filetransparency()
    {
        return $this->hasMany(Filetransparency::class, 'filetransparency_id', 'id');
    }
}
