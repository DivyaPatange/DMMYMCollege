<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipRequest extends Model
{
    protected $table = 'internship_requests';
    protected $fillabe = ['user_id','request'];
}
