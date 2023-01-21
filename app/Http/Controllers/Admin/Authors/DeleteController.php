<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;

class DeleteController extends Controller
{
    public function __invoke(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index');
    }
}
