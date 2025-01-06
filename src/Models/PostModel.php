<?php

namespace App\Models;

use App\Classes\Model\Post;

class PostModel extends Model
{
    private static $table = 'posts';

    public static function createPost(string $title, string $description, string $created_at) {
        $sql = "INSERT INTO "  . self::$table . "(title, description, created_at) VALUES ('$title', '$description', '$created_at')";
        self::create($sql);
    }

    public static function listPosts() {
        $sql = "SELECT * FROM " . self::$table;
        return self::read($sql, Post::class);
    }
}
