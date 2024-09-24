<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMaterialUploadEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $material;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($material)
    {
        $this->material = $material;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-material-upload-email')
                    ->subject('新規素材のアップロード通知')
                    ->with([
                        'material' => $this->material,
                    ]);
    }
}
