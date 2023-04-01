<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filelaw extends Model
{
    use HasFactory;

    protected $table='filelaws';

    protected $fillable=['title_filelaw', 'slug', 'file_filelaw', 'law_id'];

    protected $hidden=[];


    public function law()
    {
        return $this->belongsTo(Law::class, 'law_id', 'id');
    }
}
