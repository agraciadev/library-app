<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
        return view('books.index');
    }
}
