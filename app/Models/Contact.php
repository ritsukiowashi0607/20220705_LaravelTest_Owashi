<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function contact()
    {
        $items = Author::all();
        return view('contact', ['items' => $items]);
    }
}