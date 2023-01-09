<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Subscribe extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $student;
    public $code;
    public $stdcode;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$student,$code,$stdcode)
    {
        $this->email = $email;
        $this->student =$student;
        $this->code  = $code;
        $this->stdcode =$stdcode;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank you for subscribing to our newsletter')
        ->markdown('emails.subscribers',[
            'student'=>$this->student,
            'code'=>$this->code,
            'stdcode'=>$this->stdcode
        ]);
    }
}
