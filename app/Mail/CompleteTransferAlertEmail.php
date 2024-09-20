<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompleteTransferAlertEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $userPayment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userPayment)
    {
        $this->userPayment = $userPayment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.complete-transfer-alert-email')
                    ->subject('プランのアップグレードアラート')
                    ->with([
                        'userPayment' => $this->userPayment
                    ]);
    }
}
