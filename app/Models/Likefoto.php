<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Likefoto extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'likefotos';

    //Relasi nilai balik
    public function foto(){
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'foto_id','id');
    }
}
