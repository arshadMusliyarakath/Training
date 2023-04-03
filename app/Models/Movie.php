<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'movie_id';
    protected $guarded = [];
    protected $hidden = ['rating'];


    public function rating()
    {
        return $this->hasMany(Rating::class, 'movie_id', 'movie_id');
    }





    public function getGenresAttribute()
    {
        return explode(',', $this->movie_genre);
    }
    public function getRatedUsersAttribute()
    {
        $ratedUsers = count($this->rating);
        return $ratedUsers;
    }
    public function getFinalRateAttribute()
    {
        $ratedUsers = count($this->rating);
        $totRating = 0;
        for ($i = 0; $i < $ratedUsers; $i++) {
            $totRating = $totRating + $this->rating[$i]->rating;
        }
        if ($ratedUsers >= 1) {
            $totRating = $totRating / $ratedUsers;
        } else {
            $totRating = 5.0;
        }

        return number_format($totRating, 1);
    }

    protected $appends = ['Genres', 'RatedUsers', 'FinalRate'];
}
