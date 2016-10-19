<?php

namespace App\Models;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    public static  $rules = [
            'title' => 'required',
            'url' => 'required',
            'content' => 'required',
        ];

    public function user(){
    	return $this->belongsTo('App\User', 'created_by' , 'id');
    }

    public static function search($searchTerm){
    	return self::where('title', 'LIKE', '%'.$searchTerm.'%')
    		->orWhere('content', 'LIKE', '%'.$searchTerm.'%')->with('user');
    }

   
     public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    public function upvotes()
    {
        return $this->votes()->where('vote', '=', 1);
    }
    public function downvotes()
    {
        return $this->votes()->where('vote', '=', -1);
    }
    public function voteScore()
    {
        // find total upvotes
        $upvotes = $this->upvotes()->count();
        // find total downvotes
        $downvotes = $this->downvotes()->count();
        // return upvotes - downvotes
        return $upvotes - $downvotes;
    }
}
