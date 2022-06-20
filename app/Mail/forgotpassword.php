<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class forgotpassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('deven.patel@300minds.com')->subject('forgot password')->view('sendemaillink')->with('data',$this->data);
    }
}
