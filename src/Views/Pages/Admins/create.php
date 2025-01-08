<?php

use App\Helpers\View;

View::componentChildAdmin('Shared/TableForm/TableForm.php');
View::layoutView('Admin.php', ["titulo" => "WeBest - Início", 'sidebarList' => $sidebarList]);
