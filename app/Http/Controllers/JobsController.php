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
        //get job name.
        $job_details = \Alazhar\jobs::find($job_id);
        return view('jobs.apply-job')->with('job_id',$job_id)->with('job_name',$job_details->name_en);
    }
    public function saveJobApplication(\Alazhar\Http\Requests\SaveJobApplicationDetails $request,$job_id = '')
    {   
        $uniqueFileName = uniqid() . $request->file('resume_file')->getClientOriginalName() . '.' . $request->file('resume_file')->getClientOriginalExtension();
        $file = $request->file('resume_file');
        $upload = $file->move(base_path('public/files/resumes'));
        $attachment['attachment'] = substr($file,5,strlen($file)-1);
        //save file name to DB:
        $saving_files = \Alazhar\Attachments::create($attachment);
        if(isset($job_id) && ($job_id>0)){
            $job_application_details['job_id'] = $job_id;  
        }
        //saveUserDetails
        $result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());
        $job_application_details['applicant_id'] = $result;
        $job_application_details['attachment_id'] = $saving_files->id; 
        $job_application_created = \Alazhar\JobApplication::create($job_application_details); 
        if($job_application_created->id){
            return redirect()->route('vewsJobs')->with('status', 'You have successfully applied.');
        }else{
            return redirect()->route('vewsJobs')->with('status', 'Something went wrong.');
        }
    } 
    

    public function showJobApplications(){
        //get jobs Applications.
        $user_name = Auth()->user()->name;
        $applications = \Alazhar\JobApplication::getJobApplications();
        return view('jobs.job_applications')->with('data',$applications)->with('user_name',$user_name);
    }

    public function postJob(){
        $user_name = Auth()->user()->name;
        return view('jobs.post_job')->with('user_name',$user_name);
    }
    //save Posted JObs.

    public function savePostedJob(\Alazhar\Http\Requests\SaveJobPosts $request){
            
            $request_array = array();
            $request_array['name_en'] = $request['job_title'];
            $request_array['department_id'] = $request['category'];
            $request_array['job_desc_en'] = $request['job_desc'];
            $is_job_posted = \Alazhar\jobs::create($request_array);
            if(isset($is_job_posted->id) && ($is_job_posted->id >0)){
                    return redirect(url('/home'))->with('status', 'You have successfully posted a job.');
            }else{
                    return redirect(url('/home'))->with('status', 'Some Thing Went Wrong tryagain later...');
            }
    }
    //jobs grid.
    public function viewAllJobs(){
        echo "<pre>";
        $jobs = \Alazhar\jobs::all()->take(4);
        print_r($jobs->toArray());die;

    }
}
