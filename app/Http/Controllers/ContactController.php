<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
        return view('contact.index');
    }
}
