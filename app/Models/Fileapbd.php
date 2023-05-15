<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fileapbd extends Model
{
    use HasFactory;

    protected $table='fileapbds';

    protected $fillable=['citykab_id', 'apbd_id', 'title_fileapbd', 'slug', 'file_apbd'];

    protected $hidden=[];


    public function apbd()
    {
        return $this->belongsTo(Apbd::class, 'apbd_id', 'id');
    }

    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }
}
