<?php

use App\Helpers\View;
View::componentChildAdmin('TableData/TableData.php', ["tableData" => $tableData]);
View::layoutView('Admin.php', ["titulo" => "WeBest - Início", 'sidebarList' => $sidebarList]);