<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\JobsMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailToActiveUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            // Send email to active users
            $activeUsers = User::where('is_active', true)->get();

            foreach ($activeUsers as $user) {
                // Send email
                Mail::to($user->email)->send(new JobsMail($user));
            }
        } catch (\Exception $e) {
            // Log error
            Log::error('Error sending emails: ' . $e->getMessage());

            // Allow only 3 exceptions, then fail the job
            if ($this->attempts() > 3) {
                throw $e;
            }
        }
    }
}
