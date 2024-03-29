<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    public function foto(){
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
