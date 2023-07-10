<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HaveProjectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedValue;

    public function __construct($validatedValue){
        $this->validatedValue = $validatedValue;
    }

    public function build(){
        return $this->subject('Contact Message')->view('frontend.emails.haveproject');
    }
}
