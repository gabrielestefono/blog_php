<?php

use App\Helpers\View;

View::componentChild('./Pages/Visitor/Category/Title/Title.php');
View::componentChild('./Pages/Visitor/Category/Destaque/Destaque.php');
View::componentChild('./Pages/Visitor/Category/LatestPosts/LatestPosts.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Categorias"]);
