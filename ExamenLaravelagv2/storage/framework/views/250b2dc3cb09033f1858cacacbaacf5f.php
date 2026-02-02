<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog - ExamenLaravelagv2</title>
</head>
<body>

<h1>Blog - Posts con autor y comentarios</h1>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <hr>

    <h2><?php echo e($post->title); ?></h2>

    <p>
        <strong>Autor:</strong>
        <?php echo e($post->user->name); ?> (<?php echo e($post->user->email); ?>)
    </p>

    <p><?php echo e($post->body); ?></p>

    <h3>Comentarios</h3>

    <ul>
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong><?php echo e($comment->author_name); ?>:</strong>
                <?php echo e($comment->content); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH C:\Users\CampusFP\ExamenLaravelagv2\resources\views/blog/index.blade.php ENDPATH**/ ?>