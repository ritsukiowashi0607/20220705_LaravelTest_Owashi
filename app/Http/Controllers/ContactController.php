<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function submit(Request $request) {
        $contact = new Contact();
		$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->save();
		return view('thanks');
    }

// public function index()
//     {
//         $items = Contact::all();
//         return view('index', ['items' => $items]);
//     }
}
