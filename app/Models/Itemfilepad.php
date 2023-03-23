<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemfilepad extends Model
{
    use HasFactory;

    protected $table='itemfilepads';

    protected $fillable=['title_itemfilepad', 'pad_id'];

    protected $hidden=[];


    public function pad()
    {
        return $this->belongsTo(Pad::class, 'pad_id', 'id');
    }
}
