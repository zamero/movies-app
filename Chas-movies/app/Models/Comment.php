<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'comment', 'user_id'];
    //relationship

    public function user()
    {
        return $this->belongsTo(User::class);
 
   }

   public function film()
   {
       return $this->belongsTo(Film::class);

  }
      

   public function replies()
   {
       return $this->hasMany(Comment::class, 'parent_id');
   }
   
   public function commentable()
   {
       return $this->morphTo();
   }
    

}
