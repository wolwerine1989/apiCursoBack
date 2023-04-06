<?php

namespace App\Mail;


use Illuminate\Mail\Mailable;

class PaymentDone extends Mailable
{
    public function build()
    {
        // add custom email template
        return $this->view('email.name');
    }
}
