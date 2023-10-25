<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">
                Point of Sales
            </span>
        </a>
        <!-- END Logo -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-heading">DASHBOARD</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('apps.dashboard') }}" wire:navigate>
                        <i class="nav-main-link-icon fa fa-layer-group"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">MASTER DATA</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is('apps.categories.index') ? 'active' : '' }}" href="{{ route('apps.categories.index') }}" wire:navigate>
                        <i class="nav-main-link-icon fa fa-folder"></i>
                        <span class="nav-main-link-name">Kategori</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
