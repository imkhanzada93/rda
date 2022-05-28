<?php $__env->startSection('styles'); ?>  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Plan </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('plans.index')); ?>">Plans</a></li>
                            <li class="breadcrumb-item active">Plan</li>
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
                                <div class="grid-striped">
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Id: </div>
                                        <div class="col-sm-10"><?php echo e($plan->id); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Name: </div>
                                        <div class="col-sm-10"><?php echo e($plan->name); ?></div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Plan Category: </div>
                                        <div class="col-sm-10"><?php echo e(get_column('plan_categories', ['id' => $plan->plan_category_id])->name); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coverage Type: </div>
                                        <div class="col-sm-10"><?php echo e($plan->coverage_type); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coverage Criteria: </div>
                                        <div class="col-sm-10"><?php echo e($plan->coverage_criteria); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Eligibility Dependent Includes: </div>
                                        <div class="col-sm-10"><?php echo e($plan->eligibility_dependent_includes); ?></div>
                                    </div>
                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Created At: </div>
                                        <div class="col-sm-10"><?php echo e($plan->created_at); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Updated At: </div>
                                        <div class="col-sm-10"><?php echo e($plan->updated_at); ?></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Deleted At: </div>
                                        <div class="col-sm-10"><?php echo e($plan->deleted_at); ?></div>
                                    </div>
                                    
                                    <div class="row font-weight-bold py-2">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Benefits</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = get_list('plan_benefits', 'benefits', ['plan_benefits.benefit_id' => 'benefits.id'], ['plan_id' => $plan->id]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan_benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($plan_benefit->name); ?></td>
                                                    <td><?php echo e($plan_benefit->amount); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bookvxos/public_htmll/fmd.bookmyhouse.net/resources/views/plans/show.blade.php ENDPATH**/ ?>