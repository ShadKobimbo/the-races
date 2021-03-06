<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-4">
            <h1>Locations</h1>
        </div>
        <div class="col-sm-8">
            <?php if(!Auth::guest()): ?>
                <p><a class="btn btn-primary"  style="float: right" href="/locations/create" role="button">Add a New Location</a></p>
            <?php endif; ?>
        </div>
    </div>

    <?php if(count($locations) > 0): ?>
        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title"><a href="/locations/<?php echo e($location->id); ?>"><?php echo e($location->race_location); ?></a></h4>
                    <small class="card-text">Created on <?php echo e($location->created_at); ?></small>
                </div>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($locations->links()); ?>

    <?php else: ?>
        <p>No Locations Found At This Time!
    <?php endif; ?>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/locations/index.blade.php ENDPATH**/ ?>