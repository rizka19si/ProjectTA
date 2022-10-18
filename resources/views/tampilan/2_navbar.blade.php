      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="{{ request()->is('/awal') ? 'active' : '' }}">
                  <a href="/awal" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>

              <li class="{{ request()->is('/produk') ? 'active' : '' }}">
                  <a href="/produk" class="nav-link">
                      <i class="nav-icon far fa-image"></i>
                      <p>
                          Produk Inovasi
                      </p>
                  </a>
              </li>

              <li class="#">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                      <p>
                          Log Out
                      </p>
                  </a>
              </li>

      </nav>
      <!-- /.sidebar-menu -->
