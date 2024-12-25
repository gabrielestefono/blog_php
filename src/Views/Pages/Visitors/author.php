<?php

use App\Helpers\View;

View::componentChild('./Pages/Visitor/Author/Info/Info.php');
View::componentChild('./Pages/Visitor/Author/LatestPosts/LatestPosts.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Categorias"]);
