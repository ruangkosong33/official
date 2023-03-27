<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hostel extends Model
{
    use HasFactory;

    protected $table='hostels';

    protected $fillable=['name_hostel', 'slug', 'address_hostel'];

    protected $hidden=[];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name_hostel'
    //         ]
    //     ];
    // }
}
