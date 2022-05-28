<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo e(env('APP_NAME')); ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['bank-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('banks.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Bank</p>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['insurance-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('insurances.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Insurance</p>
                    </a>
                </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['plan-category-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('plan-categories.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Plan Categories</p>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['benefit-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('benefits.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Benefit</p>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['plan-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('plans.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Plan</p>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['account-list'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('accounts.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Account</p>
                    </a>
                </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list', 'user-list'])): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Administration
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['user-list'])): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('users.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['role-list'])): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('roles.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" onclick='logout("<?php echo e(route('logout')); ?>")'>
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
</aside><?php /**PATH /home/bookvxos/public_htmll/fmd.bookmyhouse.net/resources/views/layouts/menu.blade.php ENDPATH**/ ?>