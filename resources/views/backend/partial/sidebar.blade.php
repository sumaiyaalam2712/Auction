<ul class="py-1 menu-inner">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="{{ route('dashboard.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->

    <li class="menu-header small text-uppercase"><span class="menu-header-text">Brand</span></li>
    <!-- Cards -->
    <li class="menu-item">
        <a href="{{ route('brand.create') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Brand List</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase"><span class="menu-header-text">USER</span></li>
    <li class="menu-item">
        <a href="{{ route('user.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">User List</div>
        </a>
    </li>
    <!-- User interface -->

    <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>

    <li class="menu-item">
        <a href="{{ route('cms.create') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">CMS</div>
        </a>
    </li>


</ul>
