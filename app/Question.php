<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Question extends Model
{

    protected $fillable = ['title', 'body'];    
    // it will return user data asscociated with question
    // $question = Question::find($user_id)
    // $question->user->name;


    public function user(){
        return $this->belongsTo(User::class);
    }
    

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
