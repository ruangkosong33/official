<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apbd extends Model
{
    use HasFactory;

    protected $table='apbds';

    protected $fillable=['periode', 'slug', 'year'];

    protected $hidden=[];


    public function fileapbd()
    {
        return $this->hasMany(Fileapbd::class, 'apbd_id', 'id');
    }

    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }
}
