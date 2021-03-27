<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonafideCertificate extends Model
{
    protected $table = "bonafide_certificates";

    protected $fillabe = ['student_name', 'class', 'year', 'dob', 'date'];
}
