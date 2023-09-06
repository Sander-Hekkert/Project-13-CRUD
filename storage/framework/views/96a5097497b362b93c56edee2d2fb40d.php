
<?php $__env->startSection('content'); ?>

    <h3>Alle Reportages</h3>
    <?php if(!$reportages): ?>
        <p>Kon geen reportages vinden</p>
    <?php else: ?>
        <?php $__currentLoopData = $reportages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mx-auto" style="width: 70%;">
                <img src = "/uploads/<?php echo e($reportage->afbeelding); ?>"/>
                <div class="card-body">
                    <h5 class="card-title">Titel: <?php echo e($reportage->title); ?></h5>
                    <div class="card-text">
                        <h5>Door: <?php echo e($reportage->auteur); ?></h5>
                        <p><?php echo e($reportage->created_at); ?></p>
                        <small class="text-muted">Laatst geüpdatet:
                            <?php echo e($reportage->updated_at); ?></small>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/reportages/<?php echo e($reportage->id); ?>"
                    class="btn btn-primary btn-block">Lees verder</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2023-2024\PGB\Laravel\project-13-CRUD\planetextra\resources\views/reportages/index.blade.php ENDPATH**/ ?>