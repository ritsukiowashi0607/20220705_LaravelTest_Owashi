<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactSendController extends Controller
{
    public function contact_send() {
        return view('thanks');
    }
}
