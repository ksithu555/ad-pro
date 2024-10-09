<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\SendAdvertisementToCsvEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendCsvMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $selectedEmail, $template, $subject, $title, $body;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($selectedEmail, $template, $subject, $title, $body)
    {
        $this->selectedEmail = $selectedEmail;
        $this->template = $template;
        $this->subject = $subject;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->selectedEmail->email)->send(new SendAdvertisementToCsvEmail(
            $this->selectedEmail, 
            $this->template, 
            $this->subject, 
            $this->title, 
            $this->body
        ));
    }
}
