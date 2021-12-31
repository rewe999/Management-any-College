<?php

namespace App\Http\Controllers;

use App\Http\Models\People;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactEmail;
use App\Mail\toAdminEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $peoples = People::all();
        return view('contact.index')->with('peoples',$peoples);
    }

    public function send(ContactRequest $request){
        session()->flash('message','Wiadomość email została wysłana');
        $email = $request['email'];
        $details = [
            'email' => $request['email'],
            'name' => $request['name'],
            'message' => $request['message']
        ];

        try {
            Mail::to($email)->send(new ContactEmail($details));
            Mail::to($request['person'])->send(new toAdminEmail($details));
            return redirect()->route('contact');
        }catch (\Exception $e) {
            return view('contact.index')->with('message',"Problem podczas wysyłania emaila");
        }

    }
}
