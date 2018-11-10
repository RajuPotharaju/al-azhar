<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //

    public function getDepartments(){
    	$depts = \Alazhar\Departments::all();
    	$depts = $depts->toArray();
    	echo "<option>Select Departments</option>";
    	foreach($depts as $dept){
    		echo '<option value='.$dept['id'].'>'.$dept['name_en'].'</option>';
    	}

    }
}
