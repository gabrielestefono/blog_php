<?php

namespace App\Mock;

use stdClass;

class MockAuthors{
    public static function listAuthors(){
        return [
            (object)[
                "id" => 1,
                "name" => "Autor 1",
                "email" => "autor1@mail.com",
                "created_at" => "2021-01-01 00:00:00",
                "image" => "https://placehold.jp/3d4070/ffffff/150x150.png"
            ],
            (object)[
                "id" => 2,
                "name" => "Autor 2",
                "email" => "autor2@mail.com",
                "created_at" => "2021-01-02 00:00:00",
                "image" => "https://placehold.jp/3d4070/ffffff/150x150.png"
            ],
            (object)[
                "id" => 3,
                "name" => "Autor 3",
                "email" => "autor3@mail.com",
                "created_at" => "2021-01-03 00:00:00",
                "image" => "https://placehold.jp/3d4070/ffffff/150x150.png"
            ],
            (object)[
                "id" => 4,
                "name" => "Autor 4",
                "email" => "autor4@mail.com",
                "created_at" => "2021-01-04 00:00:00",
                "image" => "https://placehold.jp/3d4070/ffffff/150x150.png"
            ],
            (object)[
                "id" => 5,
                "name" => "Autor 5",
                "email" => "autor5@mail.com",
                "created_at" => "2021-01-05 00:00:00",
                "image" => "https://placehold.jp/3d4070/ffffff/150x150.png"
            ],
        ];
    }
}
