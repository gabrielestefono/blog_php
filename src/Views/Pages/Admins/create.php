<?php

use App\Helpers\View;

View::componentChildAdmin('TableForm/TableForm.php', ['form' => $form, 'database' => $database ?? null]);
View::layoutView('Admin.php', ["titulo" => "WeBest - Início", 'sidebarList' => $sidebarList]);
