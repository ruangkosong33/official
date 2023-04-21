<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filedownload extends Model
{
    use HasFactory;

    protected $table='filedownloads';

    protected $fillable=['file_download', 'slug', 'download_id'];

    protected $hidden=[];


    public function download()
    {
        return $this->belongsTo(Download::class, 'download_id', 'id');
    }
}
