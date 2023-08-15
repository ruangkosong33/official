<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bba extends Model
{
    use HasFactory;

    protected $table='bbas';

    protected $fillable=['category_bba', 'slug'];

    protected $hidden=[];


    public function filebba()
    {
        return $this->hasMany(Filebba::class, 'bba_id', 'id');
    }
}
