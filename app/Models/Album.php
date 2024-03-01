<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'foto',
        'user_id',
     ];
       //untuk konek ke table
       protected $table = 'albums';
       //nilai ke foto
       public function fotos()
       {
          return $this->hasMany(Foto::class,'foto_id','id');
       }
}
