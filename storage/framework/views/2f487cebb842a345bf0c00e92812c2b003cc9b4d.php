

<?php $__env->startSection('content'); ?>
<div class="card my-5 bg-warning">
    <img src="<?php echo e($movie->image); ?>" class="card-image-top" width="auto">
    <div class="card-body">
        <h1><?php echo e($movie->title); ?></h1>
        <div class="text-danger">
            <?php for($i = 1; $i <= $movie->rating_star; $i++): ?>
                <i class="fas fa-star"></i>
                <?php endfor; ?>
        </div>
        <p><?php echo e($movie->description); ?></p>

        <h3>Cast
            <?php if(auth()->guard()->check()): ?>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-plus"></i>
            </button>
            <?php endif; ?>
        </h3>
        <ul class="list-group list-group-flush">
            <?php if(count($movie->casts)): ?>
            <?php $__currentLoopData = $movie->casts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <a href="<?php echo e(route('casts.show', $cast->id)); ?>"> <?php echo e($cast->name); ?></a> -
                <span class="text-muted font-italic"><?php echo e($cast->pivot->role); ?></span>
                <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('movie_cast_destroy', [$movie->id, $cast->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-light text-danger">Delete</button>
                </form>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            No Cast!
            <?php endif; ?>

        </ul>

        <h3>Comment</h3>
        <ul class="list-group list-group-flush">
            <?php if(count($movie->comments)): ?>
            <?php $__currentLoopData = $movie->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item"><b><?php echo e($comment->user->name); ?>: </b><?php echo e($comment->content); ?>

                <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('comments.destroy', $comment->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-light text-danger">Delete</button>
                </form>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            No Comment!
            <?php endif; ?>
        </ul>
        <form action="<?php echo e(route('movies.comments.store', $movie->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="comment" class="form-control" placeholder="say something...">
            <div class="card-header d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-2">Comment</button>
            </div>
        </form>
    </div>

    <?php if(auth()->guard()->check()): ?>
    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
        <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-danger me-md-2">Delete</button>
        </form>
    </div>
    <?php endif; ?>
</div>

<?php if(auth()->guard()->check()): ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Cast</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Cast Role</h1>
                        <form action="<?php echo e(route('movie_cast_store', $movie->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label>Actor Name</label>
                                <select name="cast_movie_name" class="form-control">
                                    <option value="" disabled selected>Choose Cast</option>
                                    <?php if(count($casts)): ?>
                                    <?php $__currentLoopData = $casts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cast->id); ?>"><?php echo e($cast->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label>Role</label>
                                <input type="text" class="form-control" name="cast_movie_role">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>

                        </form>
                    </div>

                    <div class="col-md-6">
                        <h1>New Cast</h1>
                        <form action="<?php echo e(route('casts.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mt-2">
                                <label>Actor Name</label>
                                <input type="text" class="form-control" name="cast_name">
                            </div>
                            <div class="form-group mt-2">
                                <label>Actor Image</label>
                                <input type="text" class="form-control" name="cast_image">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\Laravel\laravel-movies\resources\views/movies/show.blade.php ENDPATH**/ ?>