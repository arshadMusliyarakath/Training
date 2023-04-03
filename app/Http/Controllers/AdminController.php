<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    public function adminLogin()
    {
        Auth::logout();
        if (Auth::guard('admin')->user()) {
            return redirect()->route('Dashboard');
        } else {
            return view('admin_login');
        }
    }
    public function AdminloginSubmited()
    {
        $input = ['email' => request('email'), 'password' => request('password')];
        if (Auth::guard('admin')->attempt($input, true)) {
            return redirect()->route('Dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function Dashboard()
    {
        $movies = Movie::latest()->get();
        return view('admin.Dashboard', compact('movies'));
    }
    public function addMovie()
    {
        return view('admin.addMovies');
    }
    public function editMovie($uid)
    {
        $movie = Movie::find(decrypt($uid));
        return view('admin.editMovies', compact('movie'));
    }
    public function addMovieSubmited()
    {
        $selectedGenre = '';
        $genreArr = ['Drama', 'Action', 'Adventure', 'Horror', 'Fantasy', 'Comedy', 'Romance', 'Crime'];
        for ($i = 0; $i <= 7; $i++) {
            if (request($genreArr[$i])) {
                $selectedGenre = request($genreArr[$i]) . ", " . $selectedGenre;
            }
        }
        $movie_name = request('movie_name');
        $movie_year = '2023';
        $permalink = Str::slug(strtolower($movie_name), '-') . "-" . $movie_year;

        request()->validate([
            'movie_name' => "required",
            'poster_link' => "required",
            'language' => "required",
            'description' => "required",
        ]);
        $reqData = [
            'movie_name' => $movie_name,
            'movie_poster' => request('poster_link'),
            'movie_genre' => $selectedGenre,
            'language' => request('language'),
            'movie_description' => request('description'),
            'movie_year' => $movie_year,
            'permalink' => $permalink
        ];

        if (Movie::create($reqData)) {
            return redirect()->route('Dashboard');
        } else {
            return redirect()->route('add.movie');
        }
    }
    public function deleteSubmited($movieId)
    {
        Movie::where('movie_id', decrypt($movieId))->delete();
        return redirect()->route('Dashboard');
    }
    public function editMovieSubmited()
    {
        request()->validate([
            'movie_name' => "required",
            'poster_link' => "required",
            'language' => "required",
            'description' => "required",
        ]);

        $selectedGenre = '';
        $genreArr = ['Drama', 'Action', 'Adventure', 'Horror', 'Fantasy', 'Comedy', 'Romance', 'Crime'];
        for ($i = 0; $i <= 7; $i++) {
            if (request($genreArr[$i])) {
                $selectedGenre = request($genreArr[$i]) . ", " . $selectedGenre;
            }
        }

        $movie_name = request('movie_name');
        $movie_year = '2023';
        $permalink = Str::slug(strtolower($movie_name), '-') . "-" . $movie_year;

        $reqData = [
            'movie_name' => $movie_name,
            'movie_poster' => request('poster_link'),
            'movie_genre' => $selectedGenre,
            'language' => request('language'),
            'movie_description' => request('description'),
            'movie_year' => $movie_year,
            'permalink' => $permalink
        ];

        if (Movie::where('movie_id', request('movID'))->update($reqData)) {
            return redirect()->route('Dashboard');
        } else {
            return 'failed';
        }
    }
}
