<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontEndController extends Controller
{
    public function homePage()
    {
        $topRated = Movie::limit(4)->get();
        $latestMovies = Movie::limit(8)->latest()->get();
        return view('home', compact('topRated', 'latestMovies'));
    }
    public function singleMovie($movie_name)
    {
        $checUserkRated = 0;
        $validRating = array('valid_rating_id' => 0, 'valid_rating' => 0);

        $single = Movie::where('permalink', $movie_name)->first();

        if (Auth::user()) {
            $curentUserId =  Auth::user()->user_id;
            $curentMovieId = $single->movie_id;

            if ($checUserkRated = Rating::where('user_id', $curentUserId)->where('movie_id', $curentMovieId)->first()) {
                $validRating =  array('valid_rating_id' => $checUserkRated->rating_id, 'valid_rating' => $checUserkRated->rating);
            }
        }
        return view('single', compact('single', 'validRating'));
    }

    public function genreMovie($genre)
    {
        $movies = Movie::where('movie_genre', 'like', '%' . $genre . '%')->get();
        $selectGenre = $genre;

        return view('category', compact('movies','selectGenre'));
    }
}
