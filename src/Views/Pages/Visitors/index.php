<?php

use App\Helpers\View;

View::componentChild('./Pages/Visitor/Dashboard/Destaque/Destaque.php');
View::componentChild('./Pages/Visitor/Dashboard/LatestPosts/LatestPosts.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Início"]);
