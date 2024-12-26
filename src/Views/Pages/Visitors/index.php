<?php

use App\Helpers\View;

View::componentChildVisitor('Dashboard/Destaque/Destaque.php');
View::componentChildVisitor('Dashboard/LatestPosts/LatestPosts.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Início"]);
