<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    private $user, $reg, $expo, $cat_regs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reg)
    {
        $this->reg = $reg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registration.confirmation', [
            'user'      => $this->reg->user,
            'reg'       => $this->reg,
            'expo'      => $this->reg->exposition,    
            'cat_regs'  => $this->reg->cat_registration
            ]
        );
/*
        return $this->markdown('emails.registrationconfirmationmd', [
                                            'reg'       => $this->reg,
                                            'expo'      => $this->expo,    
                                            'cat_regs'  => $this->cat_regs]
        
        );
    */
    }
}
