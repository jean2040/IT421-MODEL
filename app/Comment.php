<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['body', 'user_id'];
    function post() {
        //this do a handshake with the task.
        return $this->belongsTo(task::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
