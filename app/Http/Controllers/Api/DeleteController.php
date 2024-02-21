<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    public function deleteUser($id){
        $usr = User::find($id);
        if($usr){
            $usr->delete();
            return response()->json([
                'message' => "Data Berhasil Di Hapus !",
                'code' => 200
            ]);
        }else{
            return response([
                'message' => "Data Gagal Di Hapus $id / Data Tidak Ada"
            ]);
        }
    }
}
