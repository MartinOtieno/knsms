<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
           $contact = Contact::all();
    
        // $contact = Contact::orderBy('first_name')->get();
        return view('contact.index', [
            'contact' => $contact,
        ]);
        }

    public function show($id){

        $contact = Contact::findorFail($id);
        return view('contact.show', ['contact' => $contact]);
    }
        
    public function create() {
        return view('contact.create');
    }

    public function store(){ 
        $contact = new Contact();
        // $donor->id= request();
        $contact ->first_name = request('first_name');
        $contact ->last_name = request('last_name');
        $contact ->email = request('email');
        $contact ->subject = request('subject');
        $contact ->message = request('message');

        $contact->save();
         
        return redirect('/')->with('mssg', 'Thanks for contacting us!');
    }

}
