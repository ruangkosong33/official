<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filepad extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table='filepads';

    protected $fillable=['title_filepad', 'slug', 'file_pad', 'pad_id'];

    protected $hidden=[];


    public function pad()
    {
        return $this->belongsTo(Pad::class, 'pad_id', 'id');
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
