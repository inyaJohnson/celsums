<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TemplateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $body, $title, $data;

    public function __construct($body, $title, $data = null)
    {
        $this->body = $body;
        $this->title = $title;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('support@citigrouptrade.com', 'Citigroup Trade')->subject($this->title)->view('mail.template');

        if (isset($this->data['attachment']) && !is_string($this->data['attachment'])) {
            $email->attach($this->data['attachment']->getRealPath(),
                [
                    'as' => $this->data['attachment']->getClientOriginalName(),
                    'mime' => $this->data['attachment']->getClientMimeType()
                ]);
        }
        return $email;
    }
}
