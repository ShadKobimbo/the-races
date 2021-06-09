<?php
    use App\Models\Horse;
    use App\Models\Location;
?>

<?php $__env->startSection('content'); ?>

    <h1>Create Race</h1>

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?php echo Form::open(['action' => 'App\Http\Controllers\RacesController@store', 'method' => 'POST']); ?>

            
            <div class="form-group">
                <?php echo e(Form::label('winner', 'Race Winner')); ?>

                <?php echo e(Form::select('winner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Race Winner'])); ?>

            
            </div>
            <div class="form-group">
                <?php echo e(Form::label('second_runner', 'Second Runner Up')); ?>

                <?php echo e(Form::select('second_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Second Runner Up'])); ?>

            
            </div>
            <div class="form-group">
                <?php echo e(Form::label('third_runner', 'Third Runner Up')); ?>

                <?php echo e(Form::select('third_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Third Runner Up'])); ?>

    
            </div>
            <div class="form-group">
                <?php echo e(Form::label('fourth_runner', 'Fourth Runner Up')); ?>

                <?php echo e(Form::select('fourth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Fourth Runner Up'])); ?>

    
            </div>
            <div class="form-group">
                <?php echo e(Form::label('fifth_runner', 'Fifth Runner Up')); ?>

                <?php echo e(Form::select('fifth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Fifth Runner Up'])); ?>

    
            </div>
            <div class="form-group">
                <?php echo e(Form::label('sixth_runner', 'Sixth Runner Up')); ?>

                <?php echo e(Form::select('sixth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Sixth Runner Up'])); ?>

    
            </div>
            <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

        <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/races/create.blade.php ENDPATH**/ ?>