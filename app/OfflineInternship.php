<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class OfflineInternship extends Model
{
    protected $table = 'offline_internships';
    protected $fillable = ['firstname','middlename','lastname','sessionyear','sessonseason','date'];

    // public function offlineIntershipWorkDetails()
    // {
    //     return $this->hasMany('App\OfflineIntershipWorkDetail','offline_id');
    // }


}

