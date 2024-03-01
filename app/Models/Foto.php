<?php

namespace App\Models;

use App\Models\User;
use App\Models\Likefoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'url',
        'album_id',
        'user_id',
    ];
    protected $table ='fotos';
    //Relasi nilai balik ke tabel user
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    //relasi ke tabel likefotos
    public function likefotos(){
        return $this->hasMany(Likefoto::class,'foto_id','id');
    }
    public function albums(){
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'foto_id','id');
    }

    public function favorite(){
        return $this->hasMany(Favorite::class,'foto_id','id');
    }
}
