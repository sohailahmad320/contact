<?php
namespace Echos\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Echos\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Echos\Contact\Mail\ContactSend;

class ContactController extends Controller {
        public function index(){
                return view('contact::contact');
        }

        public function contacts(Request $request){
          Mail::to(config('contact.send_email_to'))->send(new ContactSend('your message goes here'));
          Contact::create($request->all());
          return redirect()->route('contact');
        }
 }
?>