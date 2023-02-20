<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table='posts';

    protected $fillable=['title_post', 'slug', 'category_id', 'description_post', 'image_post', 'status'];

    protected $hidden=[];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
