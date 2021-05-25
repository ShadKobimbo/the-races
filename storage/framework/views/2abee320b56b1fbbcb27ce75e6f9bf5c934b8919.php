<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <h1>Welcome To The Races!</h1>
        <p>
            <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <?php echo e(__('You are logged in!')); ?>

        </p>
        <p><a class="btn btn-primary btn-lg" href="/horses" role="button">View Horses</a> <a class="btn btn-success btn-lg" href="/races" role="button">View Races</a></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/home.blade.php ENDPATH**/ ?>