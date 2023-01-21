<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Models\Author;


class CreateController extends Controller
{
    public function __invoke()
    {
        $authors = Author::all();
        return view ('admin.books.create', compact('authors'));
    }
}
