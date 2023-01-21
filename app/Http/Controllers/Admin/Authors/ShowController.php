<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class ShowController extends Controller
{
    public function __invoke(Author $author)
    {
        $books = Book::all();
        return view ('admin.authors.show', compact('author', 'books'));
    }
}

