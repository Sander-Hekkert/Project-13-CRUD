
<?php $__env->startSection('content'); ?>

    <h3>Show Reportage</h3>
    <?php echo e($reportage->id); ?>

    <?php if(!$reportage): ?>
        <p>Kon geen reportage vinden</p>
    <?php else: ?>
        <div class="card mx-auto" style="width: 70%;">
            <img src = "/uploads/<?php echo e($reportage->afbeelding); ?>"/>
            <div class="card-body">
                <h5 class="card-title">Titel: <?php echo e($reportage->titel); ?></h5>
                <div class="card-text">
                    <h5>Door: <?php echo e($reportage->auteur); ?></h5>
                    <h5>Afbeelding: <?php echo e($reportage->afbeelding); ?></h5>
                    <p><?php echo e($reportage->created_at); ?></p>
                    <p><?php echo e($reportage->body); ?></p>
                    <small class="text-muted">Laatst geüpdatet:
                        <?php echo e($reportage->updated_at); ?></small>
                </div>
            </div>
            <div class="card-footer row mx-auto">
                <a href="/reportages/<?php echo e($reportage->id); ?>/edit"
                    class="btn btn-success mr-5">Edit</a>
                    
                <a href="/reportages" class="btn btn-primary">Terug</a>

                <?php echo Form::open(
                    ['action' =>
                        ['App\Http\Controllers\CRUDController@destroy', $reportage->id],
                        'method' => 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger mr-5'])); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2023-2024\PGB\Laravel\project-13-CRUD\planetextra\resources\views/reportages/show.blade.php ENDPATH**/ ?>