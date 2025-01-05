<?php

namespace App\Controllers\Visitors;

use App\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        return self::view('pages.visitors.author');
    }
}
