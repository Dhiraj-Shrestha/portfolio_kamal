<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $req)
    {

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ];
        // dd($data);
        Mail::to('kamal1997khatri@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('alert', 'Message has been send!');
    }
}
