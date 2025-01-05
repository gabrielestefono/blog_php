<?php

namespace App\Controllers\Visitors;

use App\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return self::view('pages.visitors.post');
    }
}
