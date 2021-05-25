<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-4">
            <h1>Horses</h1>
        </div>
        <div class="col-sm-8">
            <?php if(!Auth::guest()): ?>
                <p><a class="btn btn-primary"  style="float: right" href="/horses/create" role="button">Add a New Horse</a></p>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if(count($horses) > 0): ?>
        <?php $__currentLoopData = $horses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title"><strong>Name - </strong><a href="/horses/<?php echo e($horse->id); ?>"><?php echo e($horse->horse_name); ?></a></h4>
                    <small class="card-text">Created on <?php echo e($horse->created_at); ?></small>
                </div>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($horses->links()); ?>

    <?php else: ?>
        <p>No Horses Found At This Time!
    <?php endif; ?>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/horses/index.blade.php ENDPATH**/ ?>