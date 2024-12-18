<?php

use App\Helpers\View;

View::componentChild('./Pages/Category/Title/Title.php');
View::view('../Layout/Visitor.php', ["titulo" => "WeBest - Categorias"]);
