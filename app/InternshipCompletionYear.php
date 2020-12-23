<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCompletionYear extends Model
{
    protected $table = "internship_completion_years";

    protected $fillabe = ['internship_completion_id', 'internship_season', 'internship_year'];
}
