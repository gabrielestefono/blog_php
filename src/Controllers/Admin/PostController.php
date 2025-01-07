<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Mock\MockPosts;

class PostController extends Controller
{
    public function index()
    {
        return self::view('pages.admins.posts.posts', ['tableData' => MockPosts::listPosts()]);
    }

    public function create()
    {
        return self::view('pages.admins.posts.create');
    }

    public function edit(int $id)
    {
        return self::view('pages.admins.posts.edit', ['tableData' => MockPosts::editPost()]);
    }

    public function show()
    {
        return self::view('pages.admins.posts.show');
    }

    public function store(string $title, string $description, int $category)
    {
        $this->redirect('admin/posts');
    }
}
