<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbh extends Model
{
    use HasFactory;

    protected $table='bbhs';

    protected $fillable=['title_plan', 'slug', 'year'];

    protected $hidden=[];


    public function filebbh()
    {
        return $this->hasMany(Filebbh::class, 'filebbh_id', 'id');
    }
    
}
