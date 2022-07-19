<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactSendController extends Controller
{
    public function contacts_send(){
        return view('thanks');
    }
		public function store(Request $request) {
		$contact = new Contact();
		$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->save();
		return view('thanks');;
		}
	}