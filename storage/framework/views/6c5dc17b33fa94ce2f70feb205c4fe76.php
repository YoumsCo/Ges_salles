<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/reservation.css', 'resources/js/reservation.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Ajouter une salle
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body class="transition-all duration-500 ease-in-out relative bg-black flex flex-col justify-center items-center w-screen h-screen text-white overflow-hidden">

        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('admin.room.store')); ?>" method="POST" class="transition-all duration-500 ease-in-out w-5/12 flex flex-col justify-center items-center gap-3 rounded-lg pt-2">
            <?php echo csrf_field(); ?>
            <div class="transition-all duration-500 ease-in-out w-full flex flex-col justify-center items-center">
                <h2 class="text-lg w-full h-1/12 text-center">Ajouter une salle</h2>
            </div>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                "relative mb-5" => $errors->has('intitule')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-1/5">Intitulé : </label>
                <input type="text" name="intitule" id="duree" placeholder="Entrez l'intitulé" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('intitule') ?? ''); ?>">
                <?php $__errorArgs = ['intitule'];
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
                "relative mb-5" => $errors->has('apercu')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-2/5">Apercu : </label>
                <input type="text" name="apercu" id="duree" placeholder="Entrez la apercu" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('apercu') ?? ''); ?>">
                <?php $__errorArgs = ['apercu'];
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
                "relative mb-5" => $errors->has('description')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-2/5">Description : </label>
                <input type="text" name="description" id="duree" placeholder="Entrez la description" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('description') ?? ''); ?>">
                <?php $__errorArgs = ['description'];
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
                "relative mb-5" => $errors->has('localisation')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-2/5">Localisation : </label>
                <input type="text" name="localisation" id="duree" placeholder="Entrez la localisation" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('localisation') ?? ''); ?>">
                <?php $__errorArgs = ['localisation'];
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
                "relative mb-5" => $errors->has('dimensions')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-2/5">Dimensions : </label>
                <input type="text" name="dimensions" id="duree" placeholder="Entrez la dimensions" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('dimensions') ?? ''); ?>">
                <?php $__errorArgs = ['dimensions'];
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
                "relative mb-5" => $errors->has('prix')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-1/5">Prix : </label>
                <input type="text" name="prix" id="duree" placeholder="Entrez la prix" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('prix') ?? ''); ?>">
                <?php $__errorArgs = ['prix'];
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
                "relative mb-5" => $errors->has('image')
                ]); ?>"
                >
                <label for="duree" class="text-xl w-1/5">Image : </label>
                <input type="text" name="image" id="duree" placeholder="Entrez l'image" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="<?php echo e(old('image') ?? ''); ?>">
                <?php $__errorArgs = ['image'];
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
                <button type="submit" class="transition-all duration-500 ease-in-out relative text-xl font-extrabold w-60 h-12">Ajouter</button>
            </div>
        </form>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/Admin/room/add.blade.php ENDPATH**/ ?>