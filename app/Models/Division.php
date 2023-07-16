<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table='divisions';

    protected $fillable=['name_division', 'slug','deskripsi_so','image_so'];

    protected $hidden=[];


    public function employee()
    {
        return $this->hasMany(Employee::class, 'division_id', 'id');
    }
}
