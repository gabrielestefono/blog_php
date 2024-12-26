<?php

use App\Helpers\View;

View::componentChildVisitor('Category/Title/Title.php');
View::componentChildVisitor('Category/Destaque/Destaque.php');
View::componentChildVisitor('Category/LatestPosts/LatestPosts.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Categorias"]);
