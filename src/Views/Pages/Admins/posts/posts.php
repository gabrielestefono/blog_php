<?php

use App\Helpers\View;
View::componentChildAdmin('Shared/TableData/TableData.php', ["tableData" => $tableData]);
View::layoutView('Admin.php', ["titulo" => "WeBest - Início"]);
