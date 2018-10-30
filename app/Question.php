<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['title', 'body'];    
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    // it will return user data asscociated with question
    // $question = Question::find($user_id)
    // $question->user->name;
}
