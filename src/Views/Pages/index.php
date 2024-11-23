<?php

use App\Helpers\View;

View::component('./Pages/Dashboard/Destaque/Destaque.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Início"]);
