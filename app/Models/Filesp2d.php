<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesp2d extends Model
{
    use HasFactory;

    protected $table='sp2ds';

    protected $fillable=['city_id', 'title_sp2d', 'slug', 'date', 'description', 'total'];

    protected $hidden=[];


    public function city()
    {
        return $this->belongsTo(User::class, 'city_id', 'id');
    }
}
