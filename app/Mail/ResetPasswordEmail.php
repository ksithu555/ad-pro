<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $resetUrl;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($resetUrl, $user)
    {
        $this->resetUrl = $resetUrl;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reset-password-email')
            ->with([
                'resetUrl' => $this->resetUrl,
                'user' => $this->user,
            ])
            ->subject('パスワードリセットのリクエスト');
    }
}
