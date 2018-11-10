<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = 'jobs';

    public static function jobSearch($job_key = '',$exp_id = '',$dept_id = ''){
    	$jobs = jobs::select('jobs.id','jobs.name_en AS job_name','departments.name_en AS dept_name')
    					->leftJoin('departments', 'jobs.department_id', '=', 'departments.id');
    					if(isset($dept_id)){
    						$jobs->where('jobs.department_id',$dept_id);
    					}
    					if(isset($job_key)){
    						$jobs->where('jobs.department_id','LIKE',$dept_id.'%');
    					}
    	$jobs = $jobs->get();
    	return $jobs;

    }
}
