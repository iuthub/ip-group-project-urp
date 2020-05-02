<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function getContactPage() {
        return view('contact');
    }
    public function submitContact(ContactRequest $request){

    }
}
