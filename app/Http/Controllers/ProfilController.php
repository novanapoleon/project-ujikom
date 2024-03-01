<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function change(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ], [
            'old_password.required' => 'kolom tidak boleh kosong'


        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $user = auth()->user();
            if (!Hash::check($request->old_password, $user->password)) {
                return redirect()->back()->with('error','password lama salah');
            } else {
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);
                return redirect('/mypin');
            }
        }


    }
    public function changepassword(){
        $user = auth()->user();
        return view('page.changepassword', compact('user'));
    }
    public function profil(){
        $user = auth()->user();
        $foto = Foto::where('user_id', auth()->id())->get();
        return view('page.my-pin' , compact('user','foto'));
    }
    public function editprofil(){
        $user = auth()->user();
        return view('page.profil' , compact('user'));
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'bio' => 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $user = auth()->user();
            if($request->hasFile('pictur')){
                $foto = $request->file('pictur');
                $extensi = $foto->getClientOriginalExtension();
                $filname = 'users' . now()->timestamp . '.'. $extensi;
                $foto->move('assets',$filname);
                $user->picture = $filname;
            } else {
                $foto = $user->picture;
            }
            $user->nama_lengkap = $request->nama_lengkap;
            $user->alamat = $request->alamat;
            $user->bio = $request->bio;
            $user->save();

            return redirect('/mypin');

        }



    }
}
