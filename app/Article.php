<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id' , 'title' , 'body'];//for dont used in databased injection
}
