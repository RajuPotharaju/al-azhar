<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//{lang_id?}
//$lang_id = ''

//logout.
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function (){
	if(isset(\Auth()->user()->id)&&(\Auth()->user()->id) > 0){
		return redirect(url('/home'));
	}
    return view('welcome');//->with('lang_id',$lang_id);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Jobs
Route::get('/vacancies', 'JobsController@index')->name('vacancies');
Route::get('/jobs', 'JobsController@viewJobs')->name('vewsJobs');
Route::get('/getJobs', 'JobsController@getJobs')->name('getJobs');
Route::get('/getDepartments', 'DepartmentsController@getDepartments')->name('getDepts');

//Jobs-Admin
Route::get('/applcations', 'JobsController@showJobApplications')->name('applications');
Route::get('/postJob', 'JobsController@postJob')->name('postJob');
Route::post('/savepostedjob', 'JobsController@savePostedJob')->name('savePostedJob');
Route::get('/viewJobs', 'JobsController@viewAllJobs')->name('viewAllJobs');

//Appointments-Admin
Route::post('/storeappointments', 'AppointmentsController@store')->name('storeAppointment');



//job search
Route::post('/jobSearch', 'JobsController@jobSearch')->name('jobSearch');
Route::get('/showJobDetails/{job_id}', 'JobsController@showJobDetails')->name('showJobDetails');
Route::get('/apply/{job_id}', 'JobsController@applyForThisJob')->name('applyForThisJob');
Route::post('/saveJobApplication/{job_id?}', 'JobsController@saveJobApplication')->name('saveJobApplication');

//contactus
//contact-us.php
Route::get('/contactUs', 'ContactUsController@showContactUsForm')->name('showContactUsForm');
Route::post('/saveContactUsDetails', 'ContactUsController@saveContactUsDetails')->name('saveContactedDetails');
//AboutUsURls
Route::group(['prefix'=>'aboutUs'], function()
{
    Route::get('profile', function()
    {	
        return view('aboutus.profile');
    })->name('profile');
    Route::get('chairmanmessage',function () {
    	return view('aboutus.chairman');
	})->name('chairman');
	Route::get('ceomessage',function () {
    	return view('aboutus.ceo');
	})->name('ceo');
	Route::get('gmmessage',function () {
    	return view('aboutus.gm');
	})->name('gm');
	Route::get('deputy',function () {
    	return view('aboutus.deputy');
	})->name('deputy');
	Route::get('tqm-director',function () {
    	return view('aboutus.tqm-director');
	})->name('tqm-director');
	Route::get('medical-director',function () {
    	return view('aboutus.medical-director');
	})->name('medical-director');
	Route::get('management',function () {
    	return view('aboutus.management');
	})->name('management');
	Route::get('mission-and-vision',function () {
    	return view('aboutus.mission-and-vision');
	})->name('mission-and-vision');
});

//specialities.
Route::get('specialities', function()
    {	
        return view('specialities');
    })->name('specialities');

//facilities
Route::group(['prefix'=>'facilities'], function()
{
    Route::get('medical-lab', function()
    {	
        return view('facilities.medical-lab');
    })->name('medical-lab');
    Route::get('pharmacy',function () {
    	return view('facilities.pharmacy');
	})->name('pharmacy');
	Route::get('insurance-companies',function () {
    	return view('facilities.insurance-companies');
	})->name('insurance-companies');
	Route::get('parking',function () {
    	return view('facilities.parking');
	})->name('parking');
});
Route::get('packages', function(){	
        return view('packages');
    })->name('packages');

Route::get('appointment', function()
    {	
        return view('appointment');
    })->name('appointment');
Route::get('research', function()
    {	
        return view('research');
    })->name('research');
Route::get('photo-gallery', function()
    {	
        return view('photo-gallery');
    })->name('photo-gallery');
Route::get('video-gallery', function()
    {	
        return view('video-gallery');
    })->name('video-gallery'); 

//Static Pages

// FAQs
Route::get('faqs', function() {
    return view('static_pages.faqs');
}) -> name('faqs');

// Refer a Friend
Route::get('referral', function() {
    return view('referral');
}) -> name('referral');

// News & Events
Route::get('news', function() {
    return view('news');
}) -> name('news');

Route::get('news-details', function() {
    return view('news-details');
}) -> name('news-details');
