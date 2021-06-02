<?php
    use App\Models\Horse;
?>

<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
SAMAKI</div>
<?php endif; ?>

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Race ID</strong> - <?php echo e($race->id); ?></h1>
        </div>

        <div class="card-body">
            <p><strong>Race Winner</strong> - <?php echo e($winning_horse->horse_name); ?></p>
            <p><strong>Second Runner Up</strong> - <?php echo e($second_horse->horse_name); ?></p>
            <p><strong>Third Runner Up</strong> - <?php echo e($third_horse->horse_name); ?></p>
        </div>
        
        <div class="card-footer">
            <small>Created on <?php echo e($race->created_at); ?></small>
            <?php if(!Auth::guest()): ?>
                <a href="/races/<?php echo e($race->id); ?>/edit" class="btn btn-primary" style="float: right">Edit</a>
                <?php echo Form::open(['action' => ['App\Http\Controllers\RacesController@destroy', $race->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </div>
    </div>    
    <hr>
    <a href="/races" class="btn btn-primary">Go Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/races/show.blade.php ENDPATH**/ ?>