<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCompletionStudent extends Model
{
    protected $table = "internship_completion_students";

    protected $fillabe = ['internship_completion_id', 'serial_no', 'name'];
}
