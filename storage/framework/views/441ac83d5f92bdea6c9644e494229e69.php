<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/reservation.css', 'resources/js/reservation.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Reservation : <?php echo e($data->intitule); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body class="transition-all duration-500 ease-in-out relative bg-black flex flex-col justify-center items-center w-screen h-screen text-white overflow-hidden">
        <?php if(session('fail')): ?>
            <div class="absolute top-0 left-0 w-full bg-red-500 text-center">
                <message class="text-black font-extrabold text-xl"><?php echo e(session('fail')); ?></message>
            </div>
        <?php endif; ?>
        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <form action="<?php echo e(route('reservation', ['id' => $data->id])); ?>" method="POST" class="transition-all duration-500 ease-in-out w-5/12 flex flex-col justify-center items-center gap-3 rounded-lg">
                <?php echo csrf_field(); ?>
                <div class="transition-all duration-500 ease-in-out w-full flex flex-col justify-center items-center">
                    <img src="<?php echo e(asset('img/pexels-eberhard-grossgasteiger-1421903.jpg')); ?>" alt="img" class="w-11/12 h-40">
                    <h2 class="text-lg w-full h-1/12 text-center">Reserver : <span><?php echo e($data->intitule); ?></span></h2>
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="intitule" class="text-xl w-1/5">Intitule : </label>
                    <input type="text" name="intitule" id="intitule" value="<?php echo e($data->intitule); ?>" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/5">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="localisation" class="text-xl w-2/6">Localisation :</label>
                    <input type="text" name="localisation" id="localisation" value="<?php echo e($data->localisation); ?>" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/6">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="dimensions" class="text-xl w-2/6">Dimensions :</label>
                    <input type="text" name="dimensions" id="dimensions" value="<?php echo e($data->dimensions); ?>" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/6">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="prix" class="text-xl w-1/5">Prix : </label>
                    <input type="text" name="prix" id="prix" value="<?php echo e($data->prix); ?>" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg text-emerald-600 pointer-events-none w-4/5">
                </div>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('duree')
                    ]); ?>"
                    >
                    <label for="duree" class="text-xl w-1/5">Durée : </label>
                    <input type="text" name="duree" id="duree" placeholder="durée en heure" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('duree') ?? ''); ?>">
                    <?php $__errorArgs = ['duree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center"><?php echo e($message); ?></error>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('date')
                    ]); ?>"
                >
                    <label for="date" class="text-xl w-1/5">Date :</label>
                    <input type="date" name="date" id="date" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('date') ?? ''); ?>">
                    <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center"><?php echo e($message); ?></error>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-center pb-3">
                    <input type="hidden" name="hidden" value="<?php echo e($data->id); ?>">
                    <button type="submit" class="transition-all duration-500 ease-in-out relative text-xl font-extrabold w-60 h-12">Valider</button>
                </div>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span>Aucun resultat</span>
        <?php endif; ?>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/reservation.blade.php ENDPATH**/ ?>