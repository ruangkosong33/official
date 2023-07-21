<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table='employees';

    protected $fillable=['name_employee','slug', 'nip', 'division_id', 'image_employee', 'position', 'status', 'religion', 'education_school', 'education_work','level'];

    protected $hidden=[];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }


}
