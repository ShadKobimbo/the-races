<?php
    use App\Models\Horse;
?>

<?php $__env->startSection('content'); ?>
    <h1>Edit Race</h1>
    <?php echo Form::open(['action' => ['App\Http\Controllers\RacesController@update', $race->id], 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('race_date', 'Race Date')); ?>

            <?php echo e(Form::date('race_date', $race->race_date, ['class' => 'form-control'])); ?>


        </div>
        <div class="form-group">
            <?php echo e(Form::label('winner', 'Race Winner')); ?>

            <?php echo e(Form::select('winner', $horses = Horse::pluck('horse_name', 'id'), $race->winner, ['class' => 'form-control', 'placeholder' => 'Race Winner'])); ?>

            
        
        </div>
        <div class="form-group">
            <?php echo e(Form::label('second_runner', 'Second Runner Up')); ?>

            <?php echo e(Form::select('second_runner', $horses = Horse::pluck('horse_name', 'id'), $race->second_runner, ['class' => 'form-control', 'placeholder' => 'Second Runner Up'])); ?>


            
        
        </div>
        <div class="form-group">
            <?php echo e(Form::label('third_runner', 'Third Runner Up')); ?>

            <?php echo e(Form::select('third_runner', $horses = Horse::pluck('horse_name', 'id'), $race->third_runner, ['class' => 'form-control', 'placeholder' => 'Third Runner Up'])); ?>


            

        </div>
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/races/edit.blade.php ENDPATH**/ ?>