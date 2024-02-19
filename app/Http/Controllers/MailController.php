<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'organization' => 'required',
            'number' => 'required|digits:10',
            'message' => 'required'

        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email'=>'Email is not in Proper Format',
            'organization.required' => 'Organization is required',
            'message.required' => 'Message is required',
            'number.required' => 'Number is required',
            'number.digits' => 'Number Must be Digit| Should be 10 Digit',

        ]);
        $mailData = [
            'title' => 'Mail from PNR Services',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('sales@pnr.services')->send(new ContactMail($mailData));
        //    dd($r);
        //dd("Email is sent successfully.");
        return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');

    }
}
