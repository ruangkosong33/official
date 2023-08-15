<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filebba extends Model
{
    use HasFactory;

    protected $table='filebbas';

    protected $fillable=['title_filebba', 'slug', 'file_bba', 'date', 'description', 'total', 'bba_id', 'citykab_id'];

    protected $hidden=[];


    public function bba()
    {
        return $this->belongsTo(Bba::class, 'bba_id', 'id');
    }

    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }
}
