<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCompletion extends Model
{
    protected $table = "internship_completions";

    protected $fillabe = ['session', 'program'];
}
