<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    /**
     * Get the Film that belongs to the watchlist.
     */

    public function watchlist()
    {
        return $this->belongsToMany(User::class, 'watchlists')->withPivot('user_id');
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
