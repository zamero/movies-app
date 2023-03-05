<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Watchlist extends Model
{
    use HasFactory;

    // protected $fillable = ['film_id', 'user_id'];
    protected $primaryKey = 'user_id';

    /**
     * The Watchlists that can have many films
     */
    public function film()
    {
        return $this->hasMany(Film::class);
    }

    /**
     * The Watchlists that can have many shows
     */
    public function shows()
    {
        return $this->hasMany(Show::class);
    }


    /**
     * Get the user that owns the watchlist.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
