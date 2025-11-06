@php
    $currentRoute = Route::currentRouteName();
@endphp

<ul class="nav flex-column sidebar-menu">

    <!-- Dashboard -->
    <li class="nav-item mb-2">
        <a href="{{ route('dashboard') }}"
            class="nav-link d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active bg-primary text-white rounded' : 'text-dark' }}">
            <i class="bi bi-speedometer2 me-2"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Profile -->
    <li class="nav-item mb-2">
        <button class="nav-link d-flex justify-content-between align-items-center w-100 text-dark"
            data-bs-toggle="collapse" data-bs-target="#profileMenu"
            aria-expanded="{{ in_array($currentRoute, ['profile.edit']) ? 'true' : 'false' }}"
            aria-controls="profileMenu">
            <span><i class="bi bi-person me-2"></i>Your Profile</span>
            <i class="bi bi-chevron-down small"></i>
        </button>
        <ul class="collapse ps-4 {{ in_array($currentRoute, ['profile.edit']) ? 'show' : '' }}" id="profileMenu">
            <li>
                <a href="{{ route('profile.edit') }}"
                    class="nav-link py-1 {{ $currentRoute === 'profile.edit' ? 'active text-primary fw-semibold' : 'text-secondary' }}">
                    <i class="bi bi-pencil-square me-1"></i> Edit Profile
                </a>
            </li>
        </ul>
    </li>

    <!-- Blogs -->
    <li class="nav-item mb-2">
        <button class="nav-link d-flex justify-content-between align-items-center w-100 text-dark"
            data-bs-toggle="collapse" data-bs-target="#blogMenu"
            aria-expanded="{{ in_array($currentRoute, ['posts.index', 'posts.create', 'posts.edit']) ? 'true' : 'false' }}">
            <span><i class="bi bi-journal-text me-2"></i>Blogs</span>
            <i class="bi bi-chevron-down small"></i>
        </button>
        <ul class="collapse ps-4 {{ in_array($currentRoute, ['posts.index', 'posts.create', 'posts.edit']) ? 'show' : '' }}"
            id="blogMenu">
            <li>
                <a href="{{ route('post.create') }}"
                    class="nav-link py-1 {{ $currentRoute === 'post.create' ? 'active text-primary fw-semibold' : 'text-secondary' }}">
                    <i class="bi bi-plus-circle me-1"></i> Add New Blog
                </a>
            </li>
            <li>
                <a href="#"
                    class="nav-link py-1 {{ $currentRoute === 'posts.index' ? 'active text-primary fw-semibold' : 'text-secondary' }}">
                    <i class="bi bi-list-ul me-1"></i> View All Blogs
                </a>
            </li>
        </ul>
    </li>

    <!-- Settings -->
    <li class="nav-item mt-3">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
            <i class="bi bi-gear me-2"></i>
            <span>Settings</span>
        </a>
    </li>

</ul>

<style>
    .sidebar-menu .nav-link {
        transition: all 0.2s ease;
        font-size: 15px;
    }

    .sidebar-menu .nav-link:hover {
        background-color: #f0f4ff;
        border-radius: 6px;
    }

    .sidebar-menu .active {
        font-weight: 600;
        background-color: #0d6efd !important;
        color: white !important;
    }

    .nav-link {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        background-color: #f8f9fa;
        border-radius: 8px;
    }
</style>
