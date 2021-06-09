<?php $__env->startSection('content'); ?>
    <h1>Create Horse</h1>
    <?php echo Form::open(['action' => 'App\Http\Controllers\HorsesController@store', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('horse_name', 'Horse Name')); ?>

            <?php echo e(Form::text('horse_name', '', ['class' => 'form-control', 'placeholder' => 'Horse Name'])); ?>


        </div>
        
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/horses/create.blade.php ENDPATH**/ ?>