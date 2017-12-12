<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
 // this fixes the mass asingment problem, it disables it though
    protected $fillable = ['body'];
// this relates the tasks id with the comment id to be related.
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //
    public function addComment($body, $user_id) {


        $this->comments()->Create(compact('body', 'user_id'));
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function scopeIncomplete($query)
    {
        return $query->where('complete', 0);
    }
}
