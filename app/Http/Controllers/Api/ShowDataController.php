<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowDataController extends Controller
{
    public function show (){
        $input = User::all();

        return response()->json([
            'user'    => $input,
            'message' => 'User',
            'code' => 200
        ]);
    }
}
