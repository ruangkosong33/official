<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesop extends Model
{
    use HasFactory;

    protected $table='filesops';

    protected $fillable=['name_filesop', 'slug', 'file_sop', 'sop_id'];

    protected $hidden=[];


    public function sop()
    {
        return $this->belongsTo(Sop::class, 'sop_id', 'id');
    }
}
