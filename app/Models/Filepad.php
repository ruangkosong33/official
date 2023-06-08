<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filepad extends Model
{
    use HasFactory;

    protected $table='filepads';

    protected $fillable=['title_filepad', 'slug', 'file_filepad','pad_id'];

    protected $hidden=[];


    public function Pad()
    {
        return $this->belongsTo(Pad::class, 'pad_id', 'id');
    }
}
