<?php

use App\Helpers\View;

View::componentChild('./Pages/Category/Title/Title.php');
View::componentChild('./Pages/Category/Destaque/Destaque.php');
View::componentChild('./Pages/Category/LatestPosts/LatestPosts.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Categorias"]);
