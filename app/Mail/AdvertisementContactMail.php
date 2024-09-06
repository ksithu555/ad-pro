<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdvertisementContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $advertisementContact;
    public $advertisement;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($advertisementContact, $advertisement, $user)
    {
        $this->advertisementContact = $advertisementContact;
        $this->advertisement = $advertisement;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.advertisement-contact-email')
                    ->subject($this->advertisement->name . 'からのお問合せ')
                    ->with([
                        'advertisementContact' => $this->advertisementContact,
                        'advertisement' => $this->advertisement,
                        'user' => $this->user,
                    ]);
    }
}
