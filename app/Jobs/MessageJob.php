<?php

namespace App\Jobs;

use App\Mail\TemplateMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */

     public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $title = 'Message Notification';
        $body = 'Hello Admin,
        <br/><br/>This is to notify you that you have a message from '.$this->user->first_name.' '.$this->user->last_name.' on Citigroup App.
        <br/><br/>Reach out to Citigroup Trade Support if you have any complaints or enquiries.
        <br/><br/>Thanks,
        <br/>Team Citigroup Trade.';

        Mail::to($this->user->email)->send(new TemplateMail($body, $title));
    }
}
