<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Author;

class IndexController extends Controller
{
    public function __invoke()
    {
        $authors = Author::with('books')->get()->toArray();
        return view ('main.index', compact('authors'));
    }
}
