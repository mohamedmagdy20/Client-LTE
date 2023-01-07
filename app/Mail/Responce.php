<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Responce extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $response;
    public $student;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$response,$student)
    {
        $this->email = $email;
        $this->response = $response;
        $this->student = $student;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank you for subscribing to our newsletter')
        ->markdown('emails.responces',[
            'student'=>$this->student,
            'responce'=>$this->response
        ]);
    }
}
