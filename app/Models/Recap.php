<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    use HasFactory;

    protected $table='recaps';

    protected $fillable=['periode', 'slug', 'year'];

    protected $hidden=[];


    public function filerecap()
    {
        return $this->hasMany(Filerecap::class, 'recap_id', 'id');
    }
}
