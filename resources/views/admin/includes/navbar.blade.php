<nav class="bottom-navbar">
    <div class="container container-navbar">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="mdi mdi-view-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-newspaper menu-icon"></i>
                    <span class="menu-title">Job Vacancy</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-human-greeting menu-icon"></i>
                    <span class="menu-title">Job Seekers</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">White List</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Black List</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/icons/mdi.html" class="nav-link">
                    <i class="mdi mdi-file-document menu-icon"></i>
                    <span class="menu-title">Job Applications</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-database menu-icon"></i>
                    <span class="menu-title">Master Data</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Recruitment Stage</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.degrees.index') }}">Degree</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.vendors.index') }}">Vendors</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.provinces.index') }}">Provinces</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.districts.index') }}">District</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.subdistricts.index') }}">Sub-District</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.villages.index') }}">Villages</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-human-male-female menu-icon"></i>
                    <span class="menu-title">User Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}">List</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.permissions.index') }}">Permissions</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.roles.index') }}">Roles</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>