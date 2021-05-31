<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeavingCertificate extends Model
{
    protected $table = "leaving_certificates";
    
    protected $fillable = ['adm_reg_no', 'serial_no', 'page_no', 'tc_no', 'name', 'parent_name', 'caste', 'session_from', 'session_to', 'leave_on', 'leave_date', 'end_date', 'dob', 'class', 'year', 'enroll_class', 'prn_no', 'performance', 'total_fee', 'reason_leaving', 'remark', 'date'];
}
