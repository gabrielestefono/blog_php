<?php

namespace App\Classes\Model;

class Post
{
    public $id;

    public $title;

    public $description;

    public $createdAt;

    public $updatedAt;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
    }
}
