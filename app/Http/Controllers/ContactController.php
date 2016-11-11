<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required']);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.default', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('ben@upliftingmedia.co.uk');
            $message->subject($data['subject']);
        });

        return redirect('contact/thankyou');
    }
}
