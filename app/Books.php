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
  public function author(){
    return $this->belongsTo('App\Author');
  }
  public function categories(){
    return $this->belongsTo('App\Categories');
  }
  public function rack(){
    return $this->belongsTo('App\Rack');
  }
  public function publisher(){
    return $this->belongsTo('App\Publisher');
  }
}
