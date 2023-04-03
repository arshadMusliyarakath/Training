<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function loginPage()
    {

        if (Auth::guard('admin')->user()) {
            return redirect()->route('Dashboard');
        } else {
            return view('login');
        }
    }
    public function loginSubmited()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')], true)) {
            return redirect()->intended();
        } else {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function signupPage()
    {
        return view('signup');
    }
    public function addRating()
    {
        $movID = request('movieID');
        $rating = request('star');
        $ratingID = request('ratingID');
        $user_id = Auth::user()->user_id;

        $input = [
            'user_id' => $user_id,
            'movie_id' => $movID,
            'rating' => $rating
        ];

        $single = Movie::where('movie_id', $movID)->first();
        $curentUserId =  Auth::user()->user_id;
        $curentMovieId = $single->movie_id;
        if (Rating::where('user_id', $curentUserId)->where('movie_id', $curentMovieId)->first()) {

            Rating::where('rating_id', $ratingID)->update($input);
        } else {
            Rating::create($input);
        }


        return Redirect::back();
    }
}
