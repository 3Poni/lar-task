<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\UpdateRequest;
use App\Models\Author;
use App\Models\Book;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Author $author)
    {
        $data = $request->validated();
        $author->update($data);
        $books = Book::where('author_id', $author->id)->get();
        return view('admin.authors.show', compact('author', 'books'));
    }
}
