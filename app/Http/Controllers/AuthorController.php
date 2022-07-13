<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AuthorController extends Controller
{
    public function contact() {
        return view('index');
    }
}