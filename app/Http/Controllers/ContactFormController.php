<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function create(){
        return view('contact.create');
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return redirect()->route('contact-create')->with('success', 'Thanks for your message, success!');
    }
}
