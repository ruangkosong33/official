<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filebbh extends Model
{
    use HasFactory;

    protected $table='filebbhs';

    protected $fillable=['bbh_id', 'citykab_id', 'title_filebbh', 'slug', 'file_bbh', 'date', 'description', 'total'];

    protected $hidden=[];

  
    public function citykab()
    {
        return $this->belongsTo(Citykab::class, 'citykab_id', 'id');
    }

    public function bbh()
    {
        return $this->belongsTo(Bbh::class, 'bbh_id', 'id');
    }
}
