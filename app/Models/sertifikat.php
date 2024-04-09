<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikat extends Model
{
    protected $table ='sertifikat';
    protected $fillable = ['id','namafile','created_at','updated_at'];
}
