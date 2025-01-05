<?php

use App\Helpers\View;

View::componentChildAdmin('Shared/TableForm/TableForm.php', ['tableData' => $tableData]);
View::layoutView('Admin.php', ["titulo" => "WeBest - Início"]);
