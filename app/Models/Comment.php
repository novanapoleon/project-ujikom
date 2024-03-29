<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'foto_id',
        'isi_komentar'
    ];
    protected $table ='comments';
    public function foto(){
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
