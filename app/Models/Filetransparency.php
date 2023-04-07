<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filetransparency extends Model
{
    use HasFactory;

    protected $table='filetransparencys';

    protected $fillable=['name_filetransparency', 'slug', 'file_transparency'];

    protected $hidden=[];


    public function transparency()
    {
        return $this->belongsTo(Transparency::class, 'transparency_id', 'id');
    }
}
