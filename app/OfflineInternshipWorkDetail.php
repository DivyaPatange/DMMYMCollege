<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfflineInternshipWorkDetail extends Model

{
    
    protected $table = 'offline_internship_work_details';
    protected $fillable = ['offline_id','schedule','duration','startDate','endDate','oriattationPrgmCollegeName','place'];
    

    public function offlineinternship()
    {
        return $this->belongsTo('App\OfflineInternship','id');
    }

}
