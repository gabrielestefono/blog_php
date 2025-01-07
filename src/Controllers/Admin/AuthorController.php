<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Mock\MockAuthors;

class AuthorController extends Controller
{
    public function index()
    {
        return self::view('pages.admins.authors.author', ['tableData' => MockAuthors::listAuthors()]);
    }
}
