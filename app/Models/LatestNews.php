<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    //call migration
    protected $table = 'latest_news';
    protected $fillable = ['title','date','status'];
}
