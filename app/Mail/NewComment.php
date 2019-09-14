<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use

class NewComment extends Mailable
{
    use Queueable, SerializesModels;

     public $comment;
    /**
     *
     *
     * @return void
     */
    public function __construct(Comment $Comment)
    {
        $this -> comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@sbtweeter.com');
            ->view('mail.new-comment');
    }
}
