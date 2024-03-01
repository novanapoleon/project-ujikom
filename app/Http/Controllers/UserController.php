<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profil (){
        $user = auth()->user();
        $foto = Foto::where('user_id', auth()->id())->get();
        return view('page.mypin', compact('user','foto'));
    }
    public function explore (){
        $user = auth()->user();
        return view('page.explore', compact('user'));
    }
    public function detail (){
        $user = auth()->user();
        return view('page.detail', compact('user'));
    }
    public function upload (){
        $user = auth()->user();
        return view('page.upload', compact('user'));
    }
    public function otherpin (){
        $user = auth()->user();
        return view('page.otherpin', compact('user'));
    }
    public function editprofil (){
        $user = auth()->user();
        return view('page.editprofil', compact('user'));
    }
}
