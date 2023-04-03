<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function test()
    {
        return response()->json([
            'name' => request('name'),
            'place' => request('place')
        ]);
    }

    public function MovieDetials()
    {
        $user_ID = auth()->user()->user_id;
        if ($user_ID != null) {
            $movie = Movie::all();
            if ($movie) {
                return response()->json([
                    'status' => 200,
                    'userData' => $user = User::find($user_ID),
                    'movie' => [
                        'Detial' => $movie
                    ],
                    'message' => "Fetching Success"
                ], 200);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => "Fetching Failed!"
                ], 404);
            }
        }
    }


    public function createToken()
    {
        $token = "";
        return view('api.createToken', compact('token'));
    }
    public function generateToken()
    {
        $email = request('email');
        $password = request('password');
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($user->password == $password) {
                $token = $user->createToken('mobile-App')->plainTextToken;
            } else {
                $token = "Invalid Creadencial";
            }
            return view('api.createToken', compact('token'));
        }
    }
    public function deleteToken(){
        $user_ID = auth()->user()->user_id;
        $user = User::find($user_ID);
        $user->tokens()->delete();
        return response()->json([
           'result' => 'token deleted'
        ]);
    }
}
