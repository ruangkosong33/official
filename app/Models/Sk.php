<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    use HasFactory;

    protected $table='sks';

    protected $fillable=['title_sk', 'slug'];

    protected $hidden=[];


    public function filesk()
    {
        return $this->hasMany(Filesk::class, 'sk_id', 'id');
    }
}
