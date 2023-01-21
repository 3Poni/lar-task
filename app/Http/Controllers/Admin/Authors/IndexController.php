<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;


class IndexController extends Controller
{
    public function __invoke()
    {
        $authors = Author::with('books')->get();
        return view ('admin.authors.index', compact('authors'));
    }
}
