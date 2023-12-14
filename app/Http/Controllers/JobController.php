<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailToActiveUsers;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index');
    }

    public function sendEmailToActiveUsers()
        {
            //dispatch(new SendEmailToActiveUsers())->delay(now()->addMinutes(1));
            dispatch(new SendEmailToActiveUsers());

            //return "Emails to active users will be sent shortly.";
            return redirect()->back()->with(['error' => 'Emails to active users will be sent shortly.']);
        }
}
