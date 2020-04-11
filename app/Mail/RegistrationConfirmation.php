<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    private $reg, $expo, $cat_regs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reg, $expo, $cat_regs)
    {
        $this->reg = $reg;
        $this->expo = $expo;
        $this->cat_regs = $cat_regs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.registration.confirmation', [
            'reg'       => $this->reg,
            'expo'      => $this->expo,    
            'cat_regs'  => $this->cat_regs
            ]
        );
/*
        return $this->view('emails.registrationconfirmation', [
                                            'reg'       => $this->reg,
                                            'expo'      => $this->expo,    
                                            'cat_regs'  => $this->cat_regs]
        
        );
    */
    }
}
