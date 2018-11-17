<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications';
    protected $fillable = ['applicant_id','attachment_id'];

    public static function getJobApplications(){
    	//uni join job applicants.
    	$result = JobApplication::select('users.name','users.email','jobs.name_en as job_title','attachments.attachment')
    				->leftjoin('users','job_applications.applicant_id', '=', 'users.id')
    				->leftjoin('jobs','job_applications.job_id','=','jobs.id')
    				->leftjoin('attachments','job_applications.attachment_id', '=', 'attachments.id')
    				//->leftjoin('departments','job_applications.department_id', '=', 'departments.id')
    				->get();
    	return $result;	
    }
}
