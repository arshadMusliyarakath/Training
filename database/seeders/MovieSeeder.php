<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create(
            [
                'movie_name' => 'Lucifer',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BZGY2NzRkNmUtYjUzZS00ZDkxLTkxN2EtNDI2NjFiOGY3OGM4XkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_.jpg',
                'movie_genre' => 'Action, Drama, Crime',
                'language' => 'MALAYALAM',
                'movie_description' => "A political Godfather dies and a lot of thieves dressed up as politicians took over the rule. Question arises regarding the successor of the God, unfolding few names, along with the God's most beloved angel, Lucifer.",
                'movie_year' => 2019,
                'movie_rating' => '7.2',
                'permalink' => 'lucifer-2019'
            ]
        );
        Movie::create(
            [
                'movie_name' => 'Christopher',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BYmI4MmExNGQtNmM0Zi00MzRiLWFiZjgtZmU2MDA3MDNlN2MwXkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_.jpg',
                'movie_genre' => 'Action, Drama, Crime',
                'language' => 'MALAYALAM',
                'movie_description' => "A maverick cop is forced to work outside the limits of law, when the system fails.The story weaves across the past and present while revealing the motives that shape his actions.",
                'movie_year' => 2023,
                'movie_rating' => '6.4',
                'permalink' => 'christopher-2023'
            ]
        );
        Movie::create(
            [
                'movie_name' => 'Romancham',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BZjFkMmZkNmYtMDAyNC00OTc5LTliNDgtNGI0MDI4ODIwOGNmXkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_.jpg',
                'movie_genre' => 'Comedy, Horror',
                'language' => 'MALAYALAM',
                'movie_description' => "Based on real incidents that happened in the life of 7 bachelors in Bangalore in 2007 after playing the Ouija board and events followed by it.",
                'movie_year' => 2023,
                'movie_rating' => '8.1',
                'permalink' => 'romancham-2023'
            ]
        );
        Movie::create(
            [
                'movie_name' => 'Varisu',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BZGIwNWFhOGYtNjFmMi00ZWJjLWE0ZTEtODg3OWE1Y2M0NzVmXkEyXkFqcGdeQXVyMTMxODA4Njgx._V1_FMjpg_UX1000_.jpg',
                'movie_genre' => 'Action, Drama',
                'language' => 'TAMIL',
                'movie_description' => "Vijay Rajendran is a happy to-go lucky man. Things change when his father becomes terminally ill, and he is left to manage his business empire.",
                'movie_year' => 2023,
                'movie_rating' => '6.1',
                'permalink' => 'varisu-2023'
            ]
        );

        //new


        Movie::create(
            [
                'movie_name' => 'RRR',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BODUwNDNjYzctODUxNy00ZTA2LWIyYTEtMDc5Y2E5ZjBmNTMzXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_FMjpg_UX1000_.jpg',
                'movie_genre' => 'Action, Adventure, Drama',
                'language' => 'TELUGU',
                'movie_description' => "A fictitious story about two legendary revolutionaries and their journey away from home before they started fighting for their country in the 1920s.",
                'movie_year' => 2022,
                'movie_rating' => '7.9',
                'permalink' => 'rrr-2022'
            ]
        );

        Movie::create(
            [
                'movie_name' => 'Kumbalangi Nights',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BYmNmMGY4YjctYWFjYy00OWYyLTg3OTItODJhZmRhNDI0MTE4XkEyXkFqcGdeQXVyMTM2MzUxOTU5._V1_.jpg',
                'movie_genre' => 'Comedy, Drama, Romance',
                'language' => 'MALAYALAM',
                'movie_description' => "The film revolves around four brothers who share a love-hate relationship with each other. Their relationship progresses to another level when Saji, Boney, and Franky decide to help Bobby stand by his love.",
                'movie_year' => 2019,
                'movie_rating' => '8.5',
                'permalink' => 'kumbalangi-nights-2019'
            ]
        );

        Movie::create(
            [
                'movie_name' => 'Thallumaala',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BMTU1MjcyMGUtODI3ZS00NTc4LWExNjgtY2ZjZGJlZmUyMmFhXkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_FMjpg_UX1000_.jpg',
                'movie_genre' => 'Comedy, Drama, Action',
                'language' => 'MALAYALAM',
                'movie_description' => "Follows a youngster ready to get married, but funny events happen and changes his plans.",
                'movie_year' => 2022,
                'movie_rating' => '7.0',
                'permalink' => 'thallumaala-2022'
            ]
        );

        Movie::create(
            [
                'movie_name' => 'Avatar: 2',
                'movie_poster' => 'https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UX1000_.jpg',
                'movie_genre' => 'Action, Adventure, Fantasy',
                'language' => 'ENGLISH',
                'movie_description' => "Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.",
                'movie_year' => 2022,
                'movie_rating' => '7.8',
                'permalink' => 'avatar-2-2022'
            ]
        );
    }
}
