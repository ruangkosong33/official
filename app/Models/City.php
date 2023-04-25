<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table='citys';

    protected $fillable=['name_city', 'slug', 'file_apbd' ,'apbd_id'];

    protected $hidden=[];


    public function apbd()
    {
        return $this->belongsTo(Apbd::class, 'apbd_id', 'id');
    }

    public function filesp2d(): HasMany
    {
        return $this->hasMany(Filesp2d::class, 'filesp2d_id', 'id')   ;
    }
}