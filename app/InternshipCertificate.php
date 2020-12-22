<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCertificate extends Model
{
    protected $table = 'internship_certificate';
    protected $fillabe = ['user_id','held_year','schedule','duration','completion_date1','completion_date2',
    'place'];
}
