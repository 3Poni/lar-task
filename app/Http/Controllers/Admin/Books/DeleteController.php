<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;

class DeleteController extends Controller
{
    public function __invoke(Book $author)
    {
        $author->delete();
        return redirect()->route('admin.books.index');
    }
}
