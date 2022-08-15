<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegDone extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


 public $pharmaReg;    
    public function __construct($pharmaReg)
    {
        $this->pharmaReg = $pharmaReg; //
    }

    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.name')->with('pharmaReg',$this->pharmaReg);
    }
}
