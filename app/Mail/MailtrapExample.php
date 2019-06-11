<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adminofgnb@example.com', 'Mailtrap')
            ->subject('GNB Confirmation')
            ->markdown('mails.exmpl')
            ->with([
                'name' => 'New GNB User',
                'link' => 'https://yahoo.com'
            ]);
    }
}
