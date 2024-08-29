<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- <div class="app-brand demo">
        <a href="{{ url('/admin/dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">JQRMS</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div> -->
    <div class="app-brand demo">
        <a href="{{ url('/admin/dashboard') }}" class="app-brand-link">
            <img src="{{ asset('assets/img/logo/jqrms-logo.png') }}" alt="Logo" class="app-brand-logo">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
                <!-- <div class="badge bg-primary rounded-pill ms-auto">5</div> -->
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-list-check"></i>
                <div data-i18n="JQR's">JQR's</div>
                <!-- <div class="badge bg-primary rounded-pill ms-auto">5</div> -->
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('/admin/job-quality-requirements/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/admin/job-quality-requirements') }}" class="menu-link">
                        <div data-i18n="List">List</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <!-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Settings">Settings</span>
        </li> -->
        <!-- Cards -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="System Logs">System Logs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="View">View</div>
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>
</aside>
