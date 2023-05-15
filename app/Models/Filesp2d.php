<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesp2d extends Model
{
    use HasFactory;

    protected $table='sp2ds';

    protected $fillable=['citykab_id', 'title_sp2d', 'slug', 'date', 'description', 'total'];

    protected $hidden=[];


    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }
}
