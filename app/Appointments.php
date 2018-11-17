<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $table = 'appointments';
    protected $fillable = ['patient_id','doctor_id','department_id','appointment_reason'];
}
