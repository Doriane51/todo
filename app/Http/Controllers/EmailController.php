<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail($id)
    {
        $task = Tache::find($id);
        Mail::to(auth()->user()->email)->send(new WelcomeMail($task));

        return "Email sent successfully!";
    }
}