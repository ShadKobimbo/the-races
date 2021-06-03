<?php $__env->startSection('content'); ?>
    <h1>Create New Location</h1>
    <?php echo Form::open(['action' => 'App\Http\Controllers\LocationsController@store', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('race_location', 'Location Name')); ?>

            <?php echo e(Form::text('race_location', '', ['class' => 'form-control', 'placeholder' => 'Location Name'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/locations/create.blade.php ENDPATH**/ ?>