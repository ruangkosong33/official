<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesp2d extends Model
{
    use HasFactory;

    protected $table='filesp2ds';

    protected $fillable=['citykab_id', 'title_sp2d', 'slug', 'file_sp2d', 'date', 'description', 'total'];

    protected $hidden=[];

    protected $cast =['date'=>'date'];


    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }
}
