<?php

namespace App\Controllers\Admin;

use stdClass;
use App\Models\PostModel;
use App\Controllers\Controller;

class PostController extends Controller
{
    private stdClass $tableData;
    // Excluir este método construtor depois
    public function __construct()
    {
        $tableData = new stdClass();
        $tableData->title = "Lista de Postagens";
        $tableData->columns = ["ID", "Título", "Autor", "Data de Criação", "Ações"];
        $tableData->data = [
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
            new stdClass(),
        ];
        $this->tableData = $tableData;
    }
    public function index()
    {
        $posts = PostModel::listPosts();
        $this->tableData->data = $posts;
        return self::view('pages.admins.posts.posts', ['tableData' => $this->tableData]);
    }

    public function create()
    {
        return self::view('pages.admins.posts.create');
    }

    public function edit(int $id)
    {
        $tableData = $this->tableData->data[$id];
        return self::view('pages.admins.posts.edit', ['tableData' => $tableData]);
    }

    public function show()
    {
        return self::view('pages.admins.posts.show');
    }

    public function store(string $title, string $description, int $category)
    {
        // TODO: Criar função para validar os dados
        PostModel::createPost($title, $description, date('Y-m-d H:i:s'));
        $this->redirect('admin/posts');
    }
}
