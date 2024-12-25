<?php

use App\Helpers\View;

View::componentChild('./Pages/Visitor/Post/Info/Info.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Início"]);
