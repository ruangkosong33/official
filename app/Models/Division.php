<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table='divisions';

    protected $fillable=['name_divisions', 'slug'];

    protected $hidden=[];


    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_id', 'id');
    }
}
