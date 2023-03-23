<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filepad extends Model
{
    use HasFactory;

    protected $table='filepads';

    protected $fillable=['file_pad', 'itemfilepad_id'];

    protected $hidden=[];


    public function itemfilepad()
    {
        return $this->belongsTo(Itemfilepad::class, 'itemfilepad_id', 'id');
    }
}
