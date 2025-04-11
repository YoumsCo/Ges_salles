<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/historique.css', 'resources/js/historique.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/269-info.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Historique de : <?php echo e(Auth::user()->nom); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black text-white">
        <?php if(session('message')): ?>
            <div id="session">
                <span><?php echo e(session('message')); ?></span>
                <i class="relative text-xl fa fa-close -right-80"></i>
            </div>
        <?php endif; ?>

        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="container" class="transition-all duration-500 ease-in-out relative flex flex-col justify-start items-start gap-3 w-screen h-screen mt-5 overflow-auto">

            <h1 class="transition-all duration-500 ease-in-out w-full text-3xl text-center italic font-extrabold">Historique</h1>

            <table class="transition-all duration-500 ease-in-out w-full text-center border-2 border-white text-lg overflow-auto">
                <tr>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Intitule</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Localisation</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Dimensions</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Prix</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Durée</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Date</th>
                </tr>
                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white"><?php echo e($value->intitule); ?></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white underline"><a href="#"><?php echo e($value->localisation); ?></a></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white"><?php echo e($value->dimensions); ?></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white"><?php echo e($value->prix); ?></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white"><?php echo e($value->duree); ?></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white"><?php echo e($value->date); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/historique.blade.php ENDPATH**/ ?>