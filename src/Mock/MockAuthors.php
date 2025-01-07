<?php

namespace App\Mock;

use stdClass;

class MockAuthors{
    public static function listAuthors(){
        $tableData = new stdClass();
        $tableData->title = "Título";
        $tableData->columns = ["ID", "Nome", "E-mail"];
        $tableData->data = [
            (object)[
                "id" => 1,
                "name" => "Autor 1",
                "email" => "autor1@mail.com"
            ],
            (object)[
                "id" => 2,
                "name" => "Autor 2",
                "email" => "autor2@mail.com"
            ],
            (object)[
                "id" => 3,
                "name" => "Autor 3",
                "email" => "autor3@mail.com"
            ],
            (object)[
                "id" => 4,
                "name" => "Autor 4",
                "email" => "autor4@mail.com"
            ],
            (object)[
                "id" => 5,
                "name" => "Autor 5",
                "email" => "autor5@mail.com"
            ],
        ];
        return $tableData;
    }

    public static function editAuthor(){
        return (object)[
            "id" => 2,
            "title" => "Post 2",
            "author" => "Autor 2",
            "description" => "Descrição do post 2",
            "createdAt" => "2021-01-02 00:00:00",
            "category" => 5
        ];
    }
}
