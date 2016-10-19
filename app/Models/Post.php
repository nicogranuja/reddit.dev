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

    public static function sortNew(){
        return self::orderBy('created_at','desc')->with('user');
    }

    public static function sortRated(){
        return self::orderBy('vote_score', 'desc')->with('user');
    }

    public static function calculateVoteScore()
    {
        $posts = self::all();
        foreach ($posts as $post) {
            $post->vote_score = $post->voteScore();
            $post->save();
        }
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
