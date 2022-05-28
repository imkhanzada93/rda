<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(env('APP_NAME')); ?> | <?php echo e($title); ?></title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
        <?php echo $__env->yieldContent('styles'); ?>
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">

        <style>
            .btn-rounded{
                border-radius: 50px;
            }
            .grid-striped .row:nth-of-type(odd) {
                background-color: rgba(0,0,0,.05);
            }
        </style>

 

    </head>
    <body class="sidebar-mini text-sm">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php if(Auth::user()): ?>
                <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
    
            <?php echo $__env->yieldContent('content'); ?>
            
            <?php if(Auth::user()): ?>
                <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <?php echo $__env->yieldContent('scripts'); ?>

        <!-- Custom Script -->
        <script>
            function logout(link){
                event.preventDefault();
                var logoutForm = '<form method="POST" action="' + link + '"> <?php echo e(csrf_field()); ?></form>';
                $(logoutForm).appendTo('body').submit().remove();
            }
        </script>
    </body>
</html>
        
        
        <?php /**PATH C:\laragon\www\fmd\resources\views/layouts/app.blade.php ENDPATH**/ ?>