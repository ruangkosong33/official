<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table='videos';

    protected $fillable=['category_id', 'title_video', 'slug', 'image_video', 'link', 'status'];

    protected $hidden=[];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
