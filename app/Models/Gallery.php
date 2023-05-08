<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table='gallerys';

    protected $fillable=['category_id', 'title_gallery', 'slug', 'image_gallery'];

    protected $hidden=[];

    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    
}