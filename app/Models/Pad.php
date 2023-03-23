<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pad extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table='pads';

    protected $fillable=['title_pad', 'slug'];

    protected $hidden=[];


    public function itemfilepad()
    {
        return $this->hasMany(Filepad::class, 'pad_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
