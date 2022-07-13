<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactSendController extends Controller
{
    public function contacts_send(Request $request){
		$content = new Contact();
		$content->name = $request->name;
		$content->email = $request->email;
		$content->save();
        return view('thanks');
    }
}
