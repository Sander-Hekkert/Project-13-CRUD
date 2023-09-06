;
<?php $__env->startSection('content'); ?>
    
    <?php echo Form::open(['action' => [
    'App\Http\Controllers\CRUDController@update', $reportage->id],
        'method' => 'POST']); ?>

    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Edit reportage</h5>
            <div class="card-text">
            <p>Titel: <?php echo e($reportage->titel); ?></p>
            <p>Door: <?php echo e($reportage->auteur); ?></p>
            <div class="form-group">
                <?php echo e(Form::label('body', 'Body')); ?>

                <?php echo e(Form::textarea('body', $reportage->body,
                        ['class' =>'form-control', 'placeholder' => 'Body'])); ?>

                </div>
            </div>
        </div>
        <div class="card-footer">
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Update',  ['class' => 'btn btn-success btn-block'])); ?>

        <a href="/reportages" class="btn btn-warning">Annuleren</a>
        </div>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2023-2024\PGB\Laravel\project-13-CRUD\planetextra\resources\views/reportages/edit.blade.php ENDPATH**/ ?>