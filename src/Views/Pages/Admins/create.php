<?php

use App\Helpers\View;

View::componentChildAdmin('TableForm/TableForm.php', ['form' => $form]);
View::layoutView('Admin.php', ["titulo" => "WeBest - Início", 'sidebarList' => $sidebarList]);
