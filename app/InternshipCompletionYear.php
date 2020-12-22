<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipCompletionYear extends Model
{
    protected $table = "internship_completion_years";

    protected $fillable = ['internship_season', 'internship_year'];
}
