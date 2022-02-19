<?php

namespace App\Http\Controllers;

use App\Http\Models\People;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactEmail;
use App\Mail\toAdminEmail;
use Exception;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $peoples = People::all();
        return view('contact.index')->with('peoples',$peoples);
    }

    public function send(ContactRequest $request){
            $email = $request['email'];
            $details = [
                'email' => $request['person'],
                'name' => $request['name'],
                'message' => $request['message']
            ];

            $peoples = People::all()->toArray();

            try {
                if($this->personInArray($peoples, 'email', $request['person']) == 'no'){
                    throw new Exception();
                }

                Mail::to($email)->send(new ContactEmail($details));
                Mail::to($request['person'])->send(new toAdminEmail($details));

                session()->flash('message','Wiadomość email została wysłana');
                return redirect()->route('contact');
            }catch (Exception $e) {
                session()->flash('errorMessage','Problem podczas wysyłania emaila');
                return redirect()->route('contact');
            }
    }

    private function personInArray($array, $key, $key_value){
        $within_array = 'no';
        foreach( $array as $k=>$v ){
            if( is_array($v) ){
                $within_array = $this->personInArray($v, $key, $key_value);
                if( $within_array == 'yes' ){
                    break;
                }
            } else {
                if( $v == $key_value && $k == $key ){
                    $within_array = 'yes';
                    break;
                }
            }
        }
        return $within_array;
    }
}
