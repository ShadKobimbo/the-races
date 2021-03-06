<?php
    use App\Models\Horse;
?>

<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-header">
                <h3><strong>Welcome to Race Odds</strong></h3>
            </div>
            <div class="card-body">

                <h5 style="text-align:center"><strong>Select Horses Below</strong></h5>
                <?php echo Form::open(['action' => 'App\Http\Controllers\OddsController@checker', 'method' => 'POST']); ?>

                    <div class="form-group">
                        <?php echo e(Form::label('option_one', 'Option One')); ?>

                        <?php echo e(Form::select('option_one', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_one'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option One'])); ?>

                    
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('option_two', 'Option Two')); ?>

                        <?php echo e(Form::select('option_two', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_two'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Two'])); ?>

                    
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('option_three', 'Option Three')); ?>

                        <?php echo e(Form::select('option_three', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_three'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Three'])); ?>

            
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('option_four', 'Option Four')); ?>

                        <?php echo e(Form::select('option_four', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_four'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Four'])); ?>

            
                    </div><div class="form-group">
                        <?php echo e(Form::label('option_five', 'Option Five')); ?>

                        <?php echo e(Form::select('option_five', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_five'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Five'])); ?>

            
                    </div><div class="form-group">
                        <?php echo e(Form::label('option_six', 'Option Six')); ?>

                        <?php echo e(Form::select('option_six', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_six'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Six'])); ?>

            
                    </div>
                <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

            <?php echo Form::close(); ?>

            </div>
            <div class="card-footer">
                <p>Possible outcome will be shown on the right....</p>
                
            </div>
        </div> 
    </div>
    <hr>
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-header">
                <h3><strong>Possible Outcomes</strong></h3>
            </div>
            <div class="card-body">
                <h3> Winner - <?php echo e($winner->horse_name ?? ''); ?></h3>
                <h4> Second - <?php echo e($second_horse->horse_name ?? ''); ?></h4>
                <h5> Third - <?php echo e($third->horse_name ?? ''); ?></h5>
            </div>
        </div>
    </div>
</div>   
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/skobimbo/Work and Study/LaravelProjects/races/resources/views/pages/odds.blade.php ENDPATH**/ ?>