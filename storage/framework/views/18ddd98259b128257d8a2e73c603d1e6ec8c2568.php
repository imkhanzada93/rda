<?php $__env->startSection('styles'); ?>  
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            Roles
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                                <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-sm btn-outline-primary btn-rounded"> <i class="fa fa-plus"></i> Role</a>
                            <?php endif; ?>
                        </h1>
                        
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session()->get('success')); ?>

                                    </div>
                                <?php endif; ?>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td><?php echo e($role->name); ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-info btn-rounded" href="<?php echo e(route('roles.show', $role->id)); ?>"><i class="fa fa-eye"></i></a>
                                                <?php if(Auth::user()->can('role-edit')): ?>
                                                <a class="btn btn-sm btn-outline-primary btn-rounded" href="<?php echo e(route('roles.edit', $role->id)); ?>"><i class="fa fa-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if((Auth::user()->can('role-delete')) && ($role->id != 1)): ?>
                                                    <?php if($role->deleted_at): ?>
                                                        <a class="btn btn-sm btn-outline-success btn-rounded" href="<?php echo e(url('roles/restore/' . $role->id)); ?>"><i class="fa fa-check"></i></a>
                                                    <?php else: ?>
                                                        <a class="btn btn-sm btn-outline-danger btn-rounded" href="javascript:void(0)" onclick="destroy('<?php echo e(route('roles.destroy', $role->id)); ?>')"><i class="fa fa-trash"></i></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
    function destroy(link){
        if (confirm("Do you really want to remove the role")) {
            event.preventDefault();
            var deleteForm = '<form method="POST" action="' + link + '"> <?php echo e(csrf_field()); ?> <?php echo e(method_field("DELETE")); ?></form>';
            $(deleteForm).appendTo('body').submit().remove();
        }
    }    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\rda\resources\views/roles/index.blade.php ENDPATH**/ ?>