<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContactUsForm(){
    	return view('contacts.contact-us');
    }

    public function saveContactUsDetails(\Alazhar\Http\Requests\SaveContactUsDetails $request){
    	return view('contacts.contact-us');
    }
}
