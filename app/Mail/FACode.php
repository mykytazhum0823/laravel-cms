<?php

namespace Vanguard\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Vanguard\User;

class FACode extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var number
     */
    public $number;

    /**
     * Create a new message instance.
     *
     * @param Number $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = sprintf("[%s] %s", setting('app_name'), __('2FA Code'));

        return $this->subject($subject)->markdown('mail.fa-code');
    }
}
