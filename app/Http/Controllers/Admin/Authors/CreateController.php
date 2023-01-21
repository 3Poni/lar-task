<?php

namespace App\Http\Controllers\Admin\Authors;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view ('admin.authors.create');
    }
}
