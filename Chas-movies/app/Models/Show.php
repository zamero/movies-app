<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    /**
     * Get the Show that belongs to the watchlist.
     */
    public function watchlist()
    {
        return $this->belongsTo(Watchlist::class);
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
