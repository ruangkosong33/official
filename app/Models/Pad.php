<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pad extends Model
{
    use HasFactory;

    protected $table='pads';

    protected $fillable=['title_pad', 'slug'];

    protected $hidden=[];


    public function filepad()
    {
        return $this->hasMany(Filepad::class, 'filepad_id', 'id');
    }
}
