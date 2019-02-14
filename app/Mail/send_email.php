<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Mailable {

    use Queueable, SerializesModels;

    // public $sendEmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() { }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        // return $this->view('name_template');
    }
}