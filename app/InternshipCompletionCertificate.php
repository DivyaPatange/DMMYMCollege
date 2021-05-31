<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCompletionCertificate extends Model
{
    protected $table = "internship_completion_certificates";

    protected $fillable = ['certificate_no', 'dated', 'name', 'course', 'exam_session', 'exam_year', 'prn_no', 'pro_reg_no', 'intern_duration', 'days', 'from_date', 'to_date'];
}
