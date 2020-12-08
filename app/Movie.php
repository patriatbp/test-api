<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
    protected $fillable = ["titleType","primaryTitle","originalTitle","isAdult","startYear","endYear","runtimeMinutes","genres"];
}
