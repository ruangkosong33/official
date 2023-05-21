<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filetransparency extends Model
{
    use HasFactory;

    protected $table='filetransparencys';

    protected $fillable=['title_filetransparency', 'slug', 'file_transparency', 'transparency_id'];

    protected $hidden=[];


    public function transparency()
    {
        return $this->belongsTo(Transparency::class, 'transparency_id', 'id');
    }
}
