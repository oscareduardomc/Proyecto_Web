<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/public/img/logo_sigres.png" alt="Logo SIGRES" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIGRES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/public/img/mia.jpg" class="img-circle elevation-2" alt="Imagen de usuario">
        </div>
        <div class="info">
          <a href="/" class="d-block"><?php echo $_COOKIE['nombre']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Tablero de control
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Pedidos
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Areas
                <span class="right badge badge-danger">5</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/perfil" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Perfil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Cargos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/cargos/inicio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cargos/nuevo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>