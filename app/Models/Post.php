<?php

namespace App\Models;

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
}
