<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $book->update($data);
        return view('admin.books.show', compact('book'));
    }
}
