<?php

namespace App\Http\Controllers;

use App\Models\Trigerlogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('page.register');
    }
    public function registered(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama_lengkap' => 'required'
        ]);
        $dataStore = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama_lengkap' => $request->nama_lengkap
        ];
        // return $dataStore;
        $validate = User::create($dataStore);

        if ($validate == true) {
            return redirect('/register')->with('success', 'Data berhasil di simpan');
        } else {
            return redirect()->back();
        }

    }
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            Trigerlogin::create([
                'id_user' => Auth::user()->id
            ]);


            return redirect('/explore');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }
  public function logout(Request $request){
    $user = Auth::user(); // Mendapatkan user yang sedang login
    if ($user){
        Trigerlogin::where('id_user', $user->id)->delete();
    }
    
    $request->session()->invalidate();
    $request->session()->regenerateToken(); // Menggunakan regenerateToken() untuk menghindari Cross-Site Request Forgery (CSRF)
    
    Auth::logout(); // Logout user
    return redirect('/index');
}

}
