<?php

use App\Helpers\View;

View::componentChildShared('404/404.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Início"]);
