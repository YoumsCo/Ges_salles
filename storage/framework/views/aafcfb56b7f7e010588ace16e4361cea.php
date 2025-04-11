<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <?php echo $__env->yieldContent('css_js_file'); ?>
    <?php echo $__env->yieldContent('icon'); ?>
    <title><?php echo e(config('app.name')); ?> /<?php echo $__env->yieldContent('title'); ?></title>
</head>
    <?php echo $__env->yieldContent('body'); ?>
</html>
<?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/layout/index.blade.php ENDPATH**/ ?>