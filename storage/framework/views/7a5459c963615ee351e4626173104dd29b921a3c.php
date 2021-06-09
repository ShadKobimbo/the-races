<?php $__env->startSection('content'); ?>

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Horse Name</strong> - <?php echo e($horse->horse_name); ?></h1>
        </div>

        
        
        <div class="card-footer">
            <small>Created on <?php echo e($horse->created_at); ?></small>
            <?php if(!Auth::guest()): ?>
                <a href="/horses/<?php echo e($horse->id); ?>/edit" class="btn btn-primary" style="float: right">Edit</a>
                <?php echo Form::open(['action' => ['App\Http\Controllers\HorsesController@destroy', $horse->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </div>
    </div>    
    <hr>
    <a href="/horses" class="btn btn-primary">Go Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/horses/show.blade.php ENDPATH**/ ?>