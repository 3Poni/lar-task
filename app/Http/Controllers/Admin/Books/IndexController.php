<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;

class IndexController extends Controller
{
    public function __invoke()
    {
        $books = Book::with('author')->get();
        return view ('admin.books.index', compact('books'));
    }
}
