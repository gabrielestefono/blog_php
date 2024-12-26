<?php

use App\Config\Config; ?>
<?php
  $routesAdmin = [
    '/admin' => 'Dashboard',
    '/admin/posts' => 'Posts',
  ];

  $currentRoute = $_SERVER['REQUEST_URI'];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="<?php echo Config::getBaseUrl() . 'public/assets/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">WeBest - Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo Config::getBaseUrl() . 'public/assets/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User avatar">
      </div>
      <div class="info">
        <a href="/admin/profile" class="d-block">Gabriel Estéfono</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <?php foreach ($routesAdmin as $route => $name): ?>
          <li class="nav-item">
            <a href="<?php echo $route; ?>" class="nav-link <?php echo $currentRoute === $route ? 'active' : ''; ?>">
              <?php if ($currentRoute === $route): ?>
                <i class="fas fa-circle nav-icon"></i>
              <?php else: ?>
                <i class="far fa-circle nav-icon"></i>
              <?php endif; ?>
              <p><?php echo $name; ?></p>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</aside>
