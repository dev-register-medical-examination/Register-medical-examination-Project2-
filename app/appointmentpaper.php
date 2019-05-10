<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointmentpaper extends Model
{
   protected $table = "appointmentpaper";
   public funtion doctorappointment(){
   	return $this- > belongTo('App\doctorappointment','AppointmentId','id');
   }
}
