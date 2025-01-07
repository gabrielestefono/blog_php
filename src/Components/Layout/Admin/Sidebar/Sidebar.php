<?php

use App\Classes\RouteClass;
use App\Config\Config;

?>
<?php

// $routesClasses = [
//   new RouteClass('/admin', 'Dashboard', true),
//   new RouteClass('/admin/posts', 'Posts', true),
//   new RouteClass('/admin/posts/create', 'Posts', false),
//   new RouteClass('/admin/posts/edit/{id}', 'Posts', false),
//   new RouteClass('/admin/authors', 'Authors', true),
// ];

$currentRoute = $_SERVER['REQUEST_URI'];

$activeRouteClass = null;

foreach ($sidebarList as $route) {
  if ($route->route === $currentRoute) {
    $activeRouteClass = $route;
    break;
  }
}

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="<?php echo Config::getBaseUrl() . 'public/assets/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">WeBest - Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo Config::getBaseUrl() . 'public/assets/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User avatar">
      </div>
      <div class="info">
        <a href="/admin/profile" class="d-block">Gabriel Estéfono</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <?php foreach ($sidebarList as $index => $routeClass): ?>
          <?php if ($routeClass->show): ?>
            <li class="nav-item">
              <a href="<?php echo $routeClass->route; ?>" class="nav-link <?php echo $routeClass->name === $activeRouteClass->name  ? 'active' : ''; ?>">
                <?php if ($routeClass->name === $activeRouteClass->name): ?>
                  <i class="fas fa-circle nav-icon"></i>
                <?php else: ?>
                  <i class="far fa-circle nav-icon"></i>
                <?php endif; ?>
                <p><?php echo $routeClass->name; ?></p>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</aside>
