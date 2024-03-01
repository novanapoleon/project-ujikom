<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Comment;
use App\Models\Likefoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreController extends Controller
{
    public function getdata(Request $request){
        $explore = Foto::with(['likefotos', ])->withCount(['likefotos', 'comments'])->paginate(8);
        return response()->json([
            'status'     => 200,
            'data'      => $explore,
            'id'        => auth()->user()->id
        ]);
    }
    public function likesfotos(Request $request){
        $request->validate([
            'idfoto' => 'required'
        ]);

        $existingLike = Likefoto::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->first();
        if(!$existingLike){
            $data_save = [
                'foto_id'   => $request->idfoto,
                'user_id'   => Auth::user()->id
            ];

            Likefoto::create($data_save);

        }else {
            Likefoto::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->delete();
        }

        return response()->json('Data berhasil di simpan', 200);
    }
    public function getdatadetail(Request $request, $id){
        $dataDetailFoto  = Foto::with('user')->where('id', $id)->firstOrFail();
        return response()->json([
            'dataDetailFoto'  => $dataDetailFoto
        ], 200);
    }  


    public function ambildatakomentar(Request $request, $id){
        $ambilkomentar = Comment::with('user')->where('foto_id', $id)->get();
        return response()->json([
            'data'   => $ambilkomentar
        ], 200);
    }


    public function kirimkomentar(Request $request){
        try {
            $request->validate([
                'idfoto'         => 'required',
                'isi_komentar'   => 'required'
            ]);
            $dataStoreKomentar = [
                'user_id'        => auth()->user()->id,
                'foto_id'        => $request->idfoto,
                'isi_komentar'   => $request->isi_komentar
            ];
            comment::create($dataStoreKomentar);
            return response()->json([
                'data'           => 'Data Berhasil di simpan',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json('Data komentar gagal di simpan', 500);
        }
    }
}

