<?php

use App\Helpers\View;

View::componentChildVisitor('Post/Info/Info.php');
View::layoutView('Visitor.php', ["titulo" => "WeBest - Início"]);
