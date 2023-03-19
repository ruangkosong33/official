<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filepad extends Model
{
    use HasFactory;

    protected $table='filepads';

    protected $fillable=['title_filepad', 'slug', 'file_pad', 'pad_id'];

    protected $hidden=[];


    public function pad()
    {
        return $this->belongsTo(Pad::class, 'pad_id', 'id');
    }


}
