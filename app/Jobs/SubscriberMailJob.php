<?php

namespace App\Jobs;

use App\Mail\SubscriberMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SubscriberMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $subscribers;
    public $content;
    /**
     * Create a new job instance.
     */
    public function __construct($subscribers, $content)
    {
        $this->subscribers = $subscribers;
        $this->content = $content;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new SubscriberMail($this->content));
        }
    }
}
