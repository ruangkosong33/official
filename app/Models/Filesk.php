<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesk extends Model
{
    use HasFactory;

    protected $table='filesks';

    protected $fillable=['sk_id', 'title_filesk', 'slug', 'file_sk'];

    protected $hidden=[];


    public function sk()
    {
        return $this->belongsTo(Sk::class, 'sk_id', 'id');
    }
}
