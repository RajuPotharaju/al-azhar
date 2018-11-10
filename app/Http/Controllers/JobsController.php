<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    //View Job Vacancies
    public function index()
    {
        return view('jobs.available-vacancies');
    }
    //Job Application Form
    public function viewJobs(){
    	return view('jobs.apply-job');
    }
    public function getJobs(){
    	$jobs = \Alazhar\jobs::all();
    	$jobs = $jobs->toArray();
    	foreach($jobs as $job){
    		echo '<li>'.$job['name_en'].'</li>';
    	}

    }
    //Jobs search
    public function jobSearch(Request $request){

    	$jobs = \Alazhar\jobs::jobSearch($request->job_key,$request->exp_id,$request->dept_id);
    	foreach($jobs->toArray() as $job){
    		echo '<div class="job-box p-3 mb-3">
                                <h3 class="job-title"><a href='.url('/showJobDetails/'.$job['id']).'>'.$job['job_name'].'</a></h3>
                                <div class="job-footer">
                                    <div class="d-inline-block pr-2">
                                        <span>
                                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></svg>
                                        </span>
                                        2 days ago
                                    </div>
                                    <div class="d-inline-block pr-2">
                                        <span>
                                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path></svg>
                                        </span>
                                        Full Time
                                    </div>
                                </div>
                                <div class="job-description pt-4 pb-3">
                                    <p class="text-grey m-0">We have urgent requirement of nursing staff to work in a multispeciality hospital in Riyadh, KSA.</p>
                                </div>
                            </div>';
    	}
    }

    public function showJobDetails($job_id){
    	//return view('jobs.job-details');
    	$job_details = \Alazhar\jobs::all()->where('id',$job_id)->toArray();
    	$job_details = current($job_details);
    	return view('jobs.job-details')->with('data',$job_details);
    }

    public function applyForThisJob($job_id){
    	return view('jobs.apply-job')->with('job_id',$job_id);
    }
    public function saveJobApplication(\Alazhar\Http\Requests\SaveJobApplicationDetails $request)
    {
        $uniqueFileName = uniqid() . $request->file('resume_file')->getClientOriginalName() . '.' . $request->file('resume_file')->getClientOriginalExtension();
        $file = $request->file('resume_file'); 
        $upload = $file->move(base_path('public/files/resumes'));
		echo $upload;die;

    }
}
