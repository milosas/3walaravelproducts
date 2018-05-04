<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = ['name', 'country','phone'];

  public function products (){
    return $this->hasMany('App\Product');
  }

}
