<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function store(\Alazhar\Http\Requests\SaveAppointments $request){
    	
    	$result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());
    	$request['patient_id'] = $result;

    	$is_appointment_booked = \Alazhar\Appointments::create($request->all());
   
    	if(isset($is_appointment_booked->id) && ($is_appointment_booked->id > 0)){
                    return redirect(route('appointment'))->with('status', 'You Appointment has been booked.');
            }else{
                    return redirect(route('appointment'))->with('status', 'Some Thing Went Wrong tryagain later...');
            }
    	
    }
}
