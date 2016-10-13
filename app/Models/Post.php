<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static  $rules = [
            'title' => 'required',
            'url' => 'required',
            'content' => 'required',
        ];
}
