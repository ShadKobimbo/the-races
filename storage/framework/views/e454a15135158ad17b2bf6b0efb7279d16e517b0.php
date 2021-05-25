<?php $__env->startSection('content'); ?>
    <h1>Edit Horse</h1>
    <?php echo Form::open(['action' => ['App\Http\Controllers\HorsesController@update', $horse->id], 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('horse_name', 'Horse Name')); ?>

            <?php echo e(Form::text('horse_name', $horse->horse_name, ['class' => 'form-control', 'placeholder' => 'Horse Name'])); ?>


        </div>
        <div class="form-group">
            <?php echo e(Form::label('jockey_name', 'Jockey Name')); ?>

            <?php echo e(Form::text('jockey_name', $horse->jockey_name, ['class' => 'form-control', 'placeholder' => 'Jockey Name'])); ?>

        
        </div>
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/horses/edit.blade.php ENDPATH**/ ?>