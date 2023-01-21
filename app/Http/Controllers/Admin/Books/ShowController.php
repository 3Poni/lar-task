<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class ShowController extends Controller
{
    public function __invoke(Book $book)
    {
        $author = $book->author()->first();
        return view ('admin.books.show', compact('author', 'book'));
    }
}

