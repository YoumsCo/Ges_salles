<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/room.css']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Salle : <?php echo e($data->intitule); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body class="relative transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black overflow-x-hidden text-white">

        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="container" class="flex justify-center items-center transition-all duration-500 ease-in-out w-11/12 h-4/5 relative border-2 border-white shadow-md shadow-white">

            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div id="container-image" class="transition-all duration-300 ease-in-out relative w-1/2 h-full ">
                    <img src="<?php echo e(asset('img/pexels-eberhard-grossgasteiger-1421903.jpg')); ?>" alt="Image" class="transition-all duration-300 ease-in-out w-full h-full">
                </div>

                <div id="container-description" class="transition-all duration-300 ease-in-out relative w-1/2 h-full flex flex-col justify-center items-center">
                    <p class="transition-all duration-300 ease-in-out text-white text-xl w-full h-3/4 overflow-auto text-justify p-5 pt-2">
                        <?php echo e($data->description); ?>

                    </p>
                    <div id="container-link-button" class="transition-all duration-300 ease-in-out w-full h-1/4 flex justify-around items-center gap-3">
                        <div id="container-link" class="transition-all duration-300 ease-in-out w-1/3 h-full flex flex-col justify-center items-center overflow-auto">
                            <span class="transition-all duration-300 ease-in-out text-xl flex flex-wrap justify-center items-center w-full h-1/2 hover:text-emerald-400">Nom: <?php echo e($data->intitule); ?></span>
                            <a href="#" class="fa fa-map-marker
                            transition-all duration-300 ease-in-out text-xl underline hover:text-emerald-400 font-semibold text-center flex flex-wrap justify-center items-center w-full h-1/2">
                                <?php echo e($data->localisation); ?>

                            </a>
                        </div>
                        <button class="transition-all duration-500 ease-in-out w-52 h-14 text-xl font-extrabold"><a href="<?php echo e(route('reservation', ['id' => $data->id])); ?>">Reserver : <?php echo e($data->prix); ?></a></button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="text-white text-center text-3xl animate-bounce">Aucun resultat</span>
            <?php endif; ?>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/room.blade.php ENDPATH**/ ?>