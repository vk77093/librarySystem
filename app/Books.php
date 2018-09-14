<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
  protected $fillable=[
    'categories_id',
    'author_id',
    'title',
    'quantity','rack_id','publisher_id',
  ];
}
