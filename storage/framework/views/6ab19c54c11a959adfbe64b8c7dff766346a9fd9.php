<?php
    use App\Models\Horse;
?>

<?php $__env->startSection('content'); ?>

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Race Location ID</strong> - <?php echo e($location->id); ?></h1>
        </div>

        <div class="card-body">
            <p><strong>Race Location</strong> - <?php echo e($location->race_location); ?></p>
           
        </div>
        
        <div class="card-footer">
            <small>Created on <?php echo e($location->created_at); ?></small>
            <?php if(!Auth::guest()): ?>
                <a href="/locations/<?php echo e($location->id); ?>/edit" class="btn btn-primary" style="float: right">Edit</a>
                <?php echo Form::open(['action' => ['App\Http\Controllers\LocationsController@destroy', $location->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </div>
    </div>    
    <hr>
    <a href="/races" class="btn btn-primary">Go Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/locations/show.blade.php ENDPATH**/ ?>