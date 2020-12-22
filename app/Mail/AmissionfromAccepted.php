<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
use App\Http\Controllers\Admin\AdmissionController;
use DB;
use App\Admissionform; 

class AmissionfromAccepted extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $admissionforms = Admissionform::all();
        return $this->from('samruddhi20bawane@gmail.com')
        ->subject('Admission Form Accepted')
        ->view('email.admissionFormAccepted')->with('user', $this->user)->with('admissionform',$admissionforms);
    }
}
