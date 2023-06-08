<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pad extends Model
{
    use HasFactory;

    protected $table='pads';

    protected $fillable=['title_pad', 'slug'];

    protected $hidden=[];


    public function filepad()
    {
        return $this->hasMany(Filepad::class, 'pad_id', 'id');
    }
}
