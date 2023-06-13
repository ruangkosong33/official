<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Kyslik\ColumnSortable\Sortable;

class Category extends Model
{
    use HasFactory;
    // use Sortable;

    protected $table='categorys';

    protected $fillable=['title_category', 'slug'];

    protected $hidden=[];

    // public $sortable =['title_category', 'slug'];


    //Relasi Database//
    public function post()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function video()
    {
        return $this->hasMany(Video::class, 'video_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'category_id', 'id');
    }
}
