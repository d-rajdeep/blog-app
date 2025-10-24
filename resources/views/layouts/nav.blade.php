<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('blog.home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto align-items-center">

            <!--begin::Navbar Search-->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <!--begin::Account Dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="dropdown" href="#" role="button">
                    <img src="{{ asset('dashboard_assets/image/user.png') }}"
                         alt="User Avatar"
                         class="rounded-circle me-2"
                         width="35" height="35">
                    {{-- <span>{{ Auth::user()->name }}</span> --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                            <i class="bi bi-person-circle me-2"></i> View Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="bi bi-pencil-square me-2"></i> Edit Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right me-2"></i> Sign Out
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <!--end::Account Dropdown-->

        </ul>
        <!--end::End Navbar Links-->
    </div>
</nav>
