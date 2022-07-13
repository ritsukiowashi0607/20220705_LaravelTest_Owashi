<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
public function index()
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }
}
