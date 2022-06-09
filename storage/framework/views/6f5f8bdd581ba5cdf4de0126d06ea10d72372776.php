

<?php $__env->startSection('content'); ?>
<div class="card my-4">
    <img class="card-image-top" src="<?php echo e($cast->image); ?>">
    <div class="card-body bg-warning">
        <h1><?php echo e($cast->name); ?></h1>
        <p>All Movies Of <?php echo e($cast->name); ?></p>
        <ul class="list-group list-group-flush">
            <?php if(count($cast->movies)): ?>
            <?php $__currentLoopData = $cast->movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <a href="<?php echo e(route('movies.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
        <form action="<?php echo e(route('casts.destroy', $cast->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-danger float-right">Delete</button>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\Laravel\laravel-movies\resources\views/casts/show.blade.php ENDPATH**/ ?>