<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use stdClass;

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
        $tableData->data[0]->id = 0;
        $tableData->data[0]->title = "Postagem 0";
        $tableData->data[0]->description = "Descrição da Postagem 0";
        $tableData->data[0]->author = "Autor 0";
        $tableData->data[0]->created_at = "00/01/2021";
        $tableData->data[1]->id = 1;
        $tableData->data[1]->title = "Postagem 1";
        $tableData->data[1]->description = "Descrição da Postagem 1";
        $tableData->data[1]->author = "Autor 1";
        $tableData->data[1]->created_at = "01/01/2021";
        $tableData->data[1]->category = "1";
        $tableData->data[2]->id = 2;
        $tableData->data[2]->title = "Postagem 2";
        $tableData->data[2]->description = "Descrição da Postagem 2";
        $tableData->data[2]->author = "Autor 2";
        $tableData->data[2]->created_at = "02/01/2021";
        $tableData->data[2]->category = "2";
        $tableData->data[3]->id = 3;
        $tableData->data[3]->title = "Postagem 3";
        $tableData->data[3]->description = "Descrição da Postagem 3";
        $tableData->data[3]->author = "Autor 3";
        $tableData->data[3]->created_at = "03/01/2021";
        $tableData->data[3]->category = "3";
        $tableData->data[4]->id = 4;
        $tableData->data[4]->title = "Postagem 4";
        $tableData->data[4]->description = "Descrição da Postagem 4";
        $tableData->data[4]->author = "Autor 4";
        $tableData->data[4]->created_at = "04/01/2021";
        $tableData->data[4]->category = "4";
        $tableData->data[5]->id = 5;
        $tableData->data[5]->title = "Postagem 5";
        $tableData->data[5]->description = "Descrição da Postagem 5";
        $tableData->data[5]->author = "Autor 5";
        $tableData->data[5]->created_at = "05/01/2021";
        $tableData->data[5]->category = "5";
        $tableData->data[6]->id = 6;
        $tableData->data[6]->title = "Postagem 6";
        $tableData->data[6]->description = "Descrição da Postagem 6";
        $tableData->data[6]->author = "Autor 6";
        $tableData->data[6]->created_at = "06/01/2021";
        $tableData->data[6]->category = "6";
        $tableData->data[7]->id = 7;
        $tableData->data[7]->title = "Postagem 7";
        $tableData->data[7]->description = "Descrição da Postagem 7";
        $tableData->data[7]->author = "Autor 7";
        $tableData->data[7]->created_at = "07/01/2021";
        $tableData->data[7]->category = "7";
        $tableData->data[8]->id = 8;
        $tableData->data[8]->title = "Postagem 8";
        $tableData->data[8]->description = "Descrição da Postagem 8";
        $tableData->data[8]->author = "Autor 8";
        $tableData->data[8]->created_at = "08/01/2021";
        $tableData->data[8]->category = "8";
        $tableData->data[9]->id = 9;
        $tableData->data[9]->title = "Postagem 9";
        $tableData->data[9]->description = "Descrição da Postagem 9";
        $tableData->data[9]->author = "Autor 9";
        $tableData->data[9]->created_at = "09/01/2021";
        $tableData->data[9]->category = "9";
        $tableData->data[10]->id = 10;
        $tableData->data[10]->title = "Postagem 10";
        $tableData->data[10]->description = "Descrição da Postagem 10";
        $tableData->data[10]->author = "Autor 10";
        $tableData->data[10]->created_at = "10/01/2021";
        $tableData->data[10]->category = "10";
        $tableData->data[11]->id = 11;
        $tableData->data[11]->title = "Postagem 11";
        $tableData->data[11]->description = "Descrição da Postagem 11";
        $tableData->data[11]->author = "Autor 11";
        $tableData->data[11]->created_at = "11/01/2021";
        $tableData->data[11]->category = "11";
        $tableData->data[12]->id = 12;
        $tableData->data[12]->title = "Postagem 12";
        $tableData->data[12]->description = "Descrição da Postagem 12";
        $tableData->data[12]->author = "Autor 12";
        $tableData->data[12]->created_at = "12/01/2021";
        $tableData->data[12]->category = "12";
        $tableData->data[13]->id = 13;
        $tableData->data[13]->title = "Postagem 13";
        $tableData->data[13]->description = "Descrição da Postagem 13";
        $tableData->data[13]->author = "Autor 13";
        $tableData->data[13]->created_at = "13/01/2021";
        $tableData->data[13]->category = "13";
        $tableData->data[14]->id = 14;
        $tableData->data[14]->title = "Postagem 14";
        $tableData->data[14]->description = "Descrição da Postagem 14";
        $tableData->data[14]->author = "Autor 14";
        $tableData->data[14]->created_at = "14/01/2021";
        $tableData->data[14]->category = "14";
        $this->tableData = $tableData;
    }
    public function index()
    {
        
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
}
