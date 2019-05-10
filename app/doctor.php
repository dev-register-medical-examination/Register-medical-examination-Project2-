<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
     protected $table = "doctor";
     public funtion doctorappointment(){

     	return $this- > belongsTo('App\doctorappointment','idDoctor','id');
     	public funtion doctor(){
   	    return $this- > hasMany('App\fee','Position','idFee');
     }
}
