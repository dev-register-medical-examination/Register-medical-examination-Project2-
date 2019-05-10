<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
   protected $table = "fee";
   public funtion doctor(){
   	return $this- > belongTo('App\doctor','Position','idFee');
   }
}
