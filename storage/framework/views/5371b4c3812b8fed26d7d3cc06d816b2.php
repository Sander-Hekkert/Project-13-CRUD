
<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['action' =>'App\Http\Controllers\CRUDController@store', 'method' => 'POST','files'=>'true']); ?>

    <div class="card mx—auto"  style="width:  90%;">
        <div class="card—body">

            <h5 class="card—title">Nieuwe reportage</h5>
            <div class="card—text">
                <div class="form—group">
                    <?php echo e(Form:: text('titel', '', ['class' => 'form-control',
                    'placeholder' => 'Titel'])); ?>

                </div>
                <div class="form—group">
                    <?php echo e(Form:: text('auteur', '', ['class' => 'form-control',
                    'placeholder' => 'Auteur'])); ?>

                </div>
                <div  class="form—group">
                    <?php echo e(Form:: textarea('body', '', ['class' =>'form-control',
                    'placeholder' => 'Body'])); ?>

                </div>
            </div>
            <div>
                Upload een afbeelding
                <?php echo e(Form::file('image')); ?>

                <?php echo e(Form::submit('Upload File')); ?>

            </div>
        </div>
    </div>
    <div class="card—footer">
        <?php echo e(Form::submit('Submit', ['class' =>
        'btn btn-success btn-block'])); ?>

        <a href="/reportages" class="btn  btn-warning btn-block">
            Annuleren</a>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2023-2024\PGB\Laravel\project-13-CRUD\planetextra\resources\views/reportages/create.blade.php ENDPATH**/ ?>