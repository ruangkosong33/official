<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citykab extends Model
{
    use HasFactory;

    protected $table='citykabs';

    protected $fillable=['name_citykab', 'slug'];

    protected $hidden=[];


    public function apbd()
    {
        return $this->hasMany(Apbd::class, 'apbd_id', 'id');
    }

    public function filesp2d()
    {
        return $this->hasMany(Filesp2d::class, 'filesp2d_id', 'id')   ;
    }

    public function filebba()
    {
        return $this->hasMany(Filebba::class, 'filebba_id', 'id')   ;
    }
}
