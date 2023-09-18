<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filerecap extends Model
{
    use HasFactory;

    protected $table='filerecaps';

    protected $fillable=['citykab_id', 'recap_id', 'title_filerecap', 'slug', 'file_recap'];

    protected $hidden=[];


    public function recap()
    {
        return $this->belongsTo(Recap::class, 'recap_id', 'id');
    }


    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }

}
