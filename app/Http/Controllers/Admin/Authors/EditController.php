<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class EditController extends Controller
{
    public function __invoke(Author $author)
    {
        $books = Book::all();
        return view ('admin.authors.edit', compact('author', 'books'));
    }
}

