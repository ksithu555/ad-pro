<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAdvertisementToCsvEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $template;
    public $subject;
    public $body;
    public $selectedEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($selectedEmail, $template, $subject, $body)
    {
        $this->selectedEmail = $selectedEmail;
        $this->template = $template;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch ($this->template) {
            case 1:
                return $this->view('emails.template01-email')
                            ->subject($this->subject)
                            ->with([
                                'selectedEmail' => $this->selectedEmail,
                                'body' => $this->body
                            ]);
            case 2:
                return $this->view('emails.template02-email')
                            ->subject($this->subject)
                            ->with([
                                'selectedEmail' => $this->selectedEmail,
                                'body' => $this->body
                            ]);
            case 3:
                return $this->view('emails.template03-email')
                            ->subject($this->subject)
                            ->with([
                                'selectedEmail' => $this->selectedEmail,
                                'body' => $this->body
                            ]);
            default:
                return $this->view('emails.default-email')
                            ->subject($this->subject)
                            ->with([
                                'selectedEmail' => $this->selectedEmail,
                                'body' => $this->body
                            ]);
        }
    }
}
