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

    public function post()
    {
        return $this->hasMany(Post::class, 'post_id', 'id');
    }
}
