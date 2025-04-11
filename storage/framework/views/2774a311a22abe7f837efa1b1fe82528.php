<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/Admin/user/show_one.css']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Utlisateur : <?php echo e($data->nom); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black">
        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="container" class="relative flex flex-col justify-center items-left         border-2 border-white w-88 gap-3 text-xl p-5 rounded-xl">
            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div id="img" class="transition duration-100 ease-in-out relative flex justify-center items-center w-full animate-pulse">
                    <img src="<?php echo e(asset('storage/'.$image)); ?>" alt="img" class="rounded-full abolsute w-60 h-60">
                </div>
                <span class="text-lime-100">Nom : <i class="text-emerald-500"><?php echo e($value->nom); ?></i></span>
                <span class="text-lime-100">Email : <i class="text-emerald-500"><?php echo e($value->email); ?></i></span>
                <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">*******************</i></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div id="img" class="transition duration-100 ease-in-out relative flex justify-center items-center w-full animate-pulse">
                        <img src="#" alt="Empty" class="rounded-full abolsute w-60 h-60">
                    </div>
                    <span class="text-lime-100">Nom : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Email : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">Null</i></span>
            <?php endif; ?>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/Admin/user/show_one.blade.php ENDPATH**/ ?>