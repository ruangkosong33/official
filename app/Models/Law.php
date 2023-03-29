<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    protected $table='laws';

    protected $fillable=['title_law', 'slug'];

    protected $hidden=[];

    public function filelaw()
    {
        return $this->hasMany(Filelaw::class, 'filelaw_id', 'id');
    }
}
