<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;

class IndexController extends Controller
{
    public function __invoke()
    {
        $authors = Author::all();
        $books = Author::all();
        return view ('admin.index', compact('authors', 'books'));
    }
}
