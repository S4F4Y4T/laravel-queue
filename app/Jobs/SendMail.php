<?php

namespace App\Jobs;

use App\Mail\HelloEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private string $recipient;
    public function __construct($email)
    {
        $this->recipient = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DB::table('logs')->insert([
            'email' => $this->recipient
        ]);

//        $email = new HelloEmail();
//        Mail::to($this->recipient)->send($email);
    }
}
