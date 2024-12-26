<?php

use App\Helpers\View;

View::componentChildVisitor('Author/Info/Info.php');
View::componentChildVisitor('Author/LatestPosts/LatestPosts.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Categorias"]);
