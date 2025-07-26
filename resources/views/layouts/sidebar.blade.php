    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->

            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">My Blog</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false">
              @php
                $currentRoute = Route::currentRouteName();
              @endphp

              <li class="nav-item {{ in_array($currentRoute, ['dashboard', 'newuser']) ? 'menu-open' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link {{ in_array($currentRoute, ['dashboard', 'newuser']) ? 'active' : '' }}">
                  <i class="nav-icon bi bi-person"></i>
                  <p>Your Profile</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link {{ $currentRoute === 'newuser' ? 'active' : '' }}">
                      <i class="nav-icon bi bi-arrow-right"></i>
                      <p>Edit Profile</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ in_array($currentRoute, ['dashboard', 'blog']) ? 'menu-open' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link {{ $currentRoute === 'blog.index' ? 'active' : '' }}">

                  <i class="nav-icon bi bi-pen"></i>
                  <p>All Blogs</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('login.store') }}" class="nav-link {{ $currentRoute === 'newuser' ? 'active' : '' }}">
                      <i class="nav-icon bi bi-arrow-right"></i>
                      <p>Edit Blog</p>
                    </a>
                  </li>
                </ul>
              </li>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
