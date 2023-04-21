<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $table='downloads';

    protected $fillable=['category_download', 'slug'];

    protected $hidden=[];


    public function filedownload()
    {
        return $this->hasMany(Filedownload::class, 'file_download_id', 'id');
    }
}
