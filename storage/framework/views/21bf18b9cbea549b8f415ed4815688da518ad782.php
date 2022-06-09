

<?php $__env->startSection('content'); ?>
<h1>All Movies
    <?php if(auth()->guard()->check()): ?>
    <a href="<?php echo e(route('movies.create')); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
    <?php endif; ?>
</h1>
<?php if (! (count($movies))): ?>
<p>No Movies</p>
<?php endif; ?>


<div class="card-body row">
    <?php if(count($movies)): ?>

    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
        <div class="card">
            <img src="<?php echo e($movie->image); ?>" class="card-image-top">
            <div class="card-body">
                <h3><a href="<?php echo e(route('movies.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></h3>
                <div class="text-danger">
                    <?php for($i = 1; $i <= $movie->rating_star; $i++): ?>
                        <i class="fas fa-star"></i>
                        <?php endfor; ?>
                </div>
                <p><?php echo e(Str::limit($movie->description, 100)); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\Laravel\laravel-movies\resources\views/movies/index.blade.php ENDPATH**/ ?>