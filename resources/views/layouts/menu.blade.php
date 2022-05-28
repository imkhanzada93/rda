<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                @can(['insurance-type-list'])
                <li class="nav-item">
                    <a href="{{ route('insurance-types.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Insurance Type</p>
                    </a>
                </li>
                @endcan

                @can(['insurance-list'])
                <li class="nav-item">
                    <a href="{{ route('insurances.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Insurance</p>
                    </a>
                </li>
                @endcan
                
                @can(['plan-category-list'])
                <li class="nav-item">
                    <a href="{{ route('plan-categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Plan Categories</p>
                    </a>
                </li>
                @endcan

                @can(['benefit-list'])
                <li class="nav-item">
                    <a href="{{ route('benefits.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Benefit</p>
                    </a>
                </li>
                @endcan

                @can(['plan-list'])
                <li class="nav-item">
                    <a href="{{ route('plans.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Plan</p>
                    </a>
                </li>
                @endcan

                
                @can(['coupon-list'])
                <li class="nav-item">
                    <a href="{{ route('coupons.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Coupon</p>
                    </a>
                </li>
                @endcan

                @can(['account-list'])
                <li class="nav-item">
                    <a href="{{ route('accounts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Account</p>
                    </a>
                </li>
                @endcan

                @can(['client-list'])
                <li class="nav-item">
                    <a href="{{ route('clients.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Client</p>
                    </a>
                </li>
                @endcan
                
                @canany(['role-list', 'user-list'])
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Administration
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can(['user-list'])
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        @endcan
                        @can(['role-list'])
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                <li class="nav-item">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" onclick='logout("{{ route('logout') }}")'>
                            <i class="fa fa-power-off nav-icon"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>