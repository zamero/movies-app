<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'name' => 'adminperson',
            'email' => 'admin@test.com',
            'role' => 0,
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'userperson',
            'email' => 'user@test.com',
            'role' => 1,
            'password' => bcrypt('12345678'),
        ]);


        \App\Models\Film::factory()->create([
            'title' => 'Avatar 2',
            'genre' => 'Fantasy',
            'showormovie' => '0',
            'director' => 'nån',
            'maincast' => 'några',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_.jpg',
            'trailer' => 'https://www.youtube.com/embed/d9MyW72ELq0',
        ]);

        \App\Models\Film::factory()->create([
            'title' => 'Memory',
            'genre' => 'Action',
            'showormovie' => '0',
            'director' => 'nån',
            'maincast' => 'Liam Neeson',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
            'trailer' => 'https://www.youtube.com/embed/ye63hQLDj4k',
        ]);

        \App\Models\Film::factory()->create([
            'title' => 'Smile',
            'genre' => 'Horror',
            'showormovie' => '0',
            'director' => 'nån',
            'maincast' => 'några',
            'imgurl' => 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7f/Smile_%282022_film%29.jpg/220px-Smile_%282022_film%29.jpg',
            'trailer' => 'https://www.youtube.com/embed/BcDK7lkzzsU',
        ]);

        \App\Models\Film::factory()->create([
            'title' => 'Jaws',
            'genre' => 'Horror',
            'showormovie' => '0',
            'director' => 'nån',
            'maincast' => 'några',
            'imgurl' => 'https://resizing.flixster.com/9ulMcbVWtxvAW4so_JAhh75_cQE=/206x305/v2/https://flxt.tmsimg.com/assets/p8174_p_v8_ai.jpg',
            'trailer' => 'https://www.youtube.com/embed/U1fu_sA7XhE',
        ]);


        \App\Models\Film::factory()->create([
            'title' => 'Devil wears Prada',
            'genre' => 'Comedy',
            'showormovie' => '0',
            'director' => 'nån',
            'maincast' => 'några',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZjQ3ZTIzOTItMGNjNC00MWRmLWJlMGEtMjJmMDM5ZDIzZGM3XkEyXkFqcGdeQXVyMTkzODUwNzk@._V1_.jpg',
            'trailer' => 'https://www.youtube.com/embed/6ZOZwUQKu3E',
        ]);




        \App\Models\Film::factory()->create([
            'title' => 'Scrubs',
            'genre' => 'Drama',
            'director' => 'nån',
            'maincast' => 'Liam Neeson',
            'showormovie' => '1',
            'episodes' => '1',
            'seasons' => '1',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
            'trailer' => 'https://www.youtube.com/embed/Ji6-Pbfypys',
        ]);

        \App\Models\Film::factory()->create([
            'title' => 'Something',
            'genre' => 'Action',
            'director' => 'nån',
            'maincast' => 'Liam Neeson',
            'showormovie' => '1',
            'episodes' => '1',
            'seasons' => '1',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
            'trailer' => 'https://www.youtube.com/embed/_1g3_1coMio',
        ]);

        \App\Models\Film::factory()->create([
            'title' => 'Black mirror',
            'genre' => 'Thriller',
            'director' => 'nån',
            'maincast' => 'Liam Neeson',
            'showormovie' => '1',
            'episodes' => '1',
            'seasons' => '1',
            'imgurl' => 'https://m.media-amazon.com/images/I/91LcizItUqL._SL1500_.jpg',
            'trailer' => 'https://www.youtube.com/embed/V0XOApF5nLU',
        ]);


        \App\Models\Film::factory()->create([
            'title' => 'The Last Of Us',
            'genre' => 'Horror',
            'director' => 'nån',
            'maincast' => 'Liam Neeson',
            'showormovie' => '1',
            'episodes' => '1',
            'seasons' => '1',
            'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZGUzYTI3M2EtZmM0Yy00NGUyLWI4ODEtN2Q3ZGJlYzhhZjU3XkEyXkFqcGdeQXVyNTM0OTY1OQ@@._V1_.jpg',
            'trailer' => 'https://www.youtube.com/embed/uLtkt8BonwM',
        ]);
    }
}
