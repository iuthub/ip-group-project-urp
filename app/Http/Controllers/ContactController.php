<?php

namespace App\Http\Controllers;

use http\Params;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function getContactPage() {
        return view('contact');
    }
    public function submitContact(ContactRequest $request){

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contactPage')->with('success', 'Your message has been received.');
    }
}
