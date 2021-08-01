<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Mail\toAdminEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function send(Request $request){
        session()->flash('message','Wiadomość email została wysłana');
        $email = $request['email'];
        $details = [
            'email' => $request['email'],
            'name' => $request['name'],
            'message' => $request['message']
        ];

        Mail::to($email)->send(new ContactEmail($details));
        Mail::to(env('MAIL_USERNAME'))->send(new toAdminEmail($details));
        return view('contact.index');
    }
}
