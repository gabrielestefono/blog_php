<?php

namespace App\Mock;

class MockPosts{
    public static function listPosts(): array{
        return [
            (object)[
                "id" => 1,
                "title" => "Post 1",
                "author" => "Autor 1",
                "createdAt" => "2021-01-01 00:00:00"
            ],
            (object)[
                "id" => 2,
                "title" => "Post 2",
                "author" => "Autor 2",
                "createdAt" => "2021-01-02 00:00:00"
            ],
            (object)[
                "id" => 3,
                "title" => "Post 3",
                "author" => "Autor 3",
                "createdAt" => "2021-01-03 00:00:00"
            ],
            (object)[
                "id" => 4,
                "title" => "Post 4",
                "author" => "Autor 4",
                "createdAt" => "2021-01-04 00:00:00"
            ],
            (object)[
                "id" => 5,
                "title" => "Post 5",
                "author" => "Autor 5",
                "createdAt" => "2021-01-05 00:00:00"
            ],
        ];
    }

    public static function editPost(){
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
