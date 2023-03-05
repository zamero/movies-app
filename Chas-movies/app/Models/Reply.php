<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function film()
    {
        return $this->hasMany(Film::class);
    }

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
