<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\UpdateRequest;
use App\Models\Author;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Author $author)
    {
        $data = $request->validated();
        $author->update($data);

        return view('admin.authors.show', compact('author'));
    }
}
