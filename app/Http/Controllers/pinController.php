<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pinController extends Controller
{
    public function getdatapin(Request $request, $id)
    {
        $dataUser = User::where('id', $id)->first();
        return response()->json([
            'dataUser'        => $dataUser,
        ], 200);
    }
    public function getdata(Request $request){
        $explore = Foto::with(['likefotos',])->withCount(['likefotos', 'comments'])->where('user_id', $request->idUser)->paginate(4);
        return response()->json([
            'data'     =>$explore,
            'statuscode'    => 200,
            'idUser'        => auth()->user()->id
        ]);
    }
}
