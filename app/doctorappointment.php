<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctorappointment extends Model
{
    protected $table = "doctorappointment";
    public funtion doctor(){

    	return $this- > hasMany('App\doctor','idDoctor','id');
    }
    public funtion appointmentpaper(){

    	return $this- > hasMany ('App\doctor','AppointmentID','id');
    }
}
