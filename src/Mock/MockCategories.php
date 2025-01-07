<?php

namespace App\Mock;

class MockCategories {
    public static function listCategories(){
        return [
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
    }
}
