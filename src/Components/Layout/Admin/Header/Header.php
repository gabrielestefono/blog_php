<?php

use App\Helpers\View; ?>

<?php View::componentLayoutAdmin('Navbar/Navbar.php')?>
<?php View::componentLayoutAdmin('Sidebar/Sidebar.php', ['sidebarList' => $sidebarList])?>
