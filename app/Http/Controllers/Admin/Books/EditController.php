<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $authors = Author::all();
        $book = Book::find($id);
        return view ('admin.authors.edit', compact('book', 'authors'));
    }
}

