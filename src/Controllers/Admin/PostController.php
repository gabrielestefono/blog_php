<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return self::view('pages.admins.posts.posts');
    }

    public function create()
    {
        return self::view('pages.admins.posts.create');
    }

    public function edit()
    {
        return self::view('pages.admins.posts.edit');
    }

    public function show()
    {
        return self::view('pages.admins.posts.show');
    }
}
