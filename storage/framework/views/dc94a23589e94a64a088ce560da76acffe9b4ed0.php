<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-4">
            <h1>Races</h1>
        </div>
        <div class="col-sm-8">
            <?php if(!Auth::guest()): ?>
                <p><a class="btn btn-primary"  style="float: right" href="/races/create" role="button">Add a New Race</a></p>
            <?php endif; ?>
        </div>
    </div>

    <?php if(count($races) > 0): ?>
        <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">
                        Created on 
                        <a href="/races/<?php echo e($race->id); ?>">                    
                            <small class="card-text"><?php echo e($race->created_at); ?></small>
                        </a>
                    </h4>
                    
                </div>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($races->links()); ?>

    <?php else: ?>
        <p>No Races Found At This Time!
    <?php endif; ?>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/races/index.blade.php ENDPATH**/ ?>