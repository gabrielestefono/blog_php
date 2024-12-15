<?php

use App\Helpers\View;

View::componentChild('./Pages/Dashboard/Destaque/Destaque.php');
View::componentChild('./Pages/Dashboard/LatestPosts/LatestPosts.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Início"]);
