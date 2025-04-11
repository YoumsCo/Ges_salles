<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/profile.css', 'resources/js/profile.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/036-profile.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body class="transition-sm duration-100 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black text-white">

        

        <div id="container" class="relative flex flex-col justify-center items-left border-2 border-white w-88 h-88 gap-3 text-xl p-5 animate-bounce rounded-3xl">
            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div id="img" class="transition duration-100 ease-in-out relative flex flex-col justify-center items-center gap-1 w-full h-2/3 animate-pulse">
                    <img src="<?php echo e(asset('storage/'.$image)); ?>" alt="img" class="rounded-full abolsute w-60 h-60">
                    <i class="fa fa-camera transition ease-in-out duration-100 absolute right-12 top-52 text-emerald-400 text-3xl cursor-pointer hover:text-lime-100"></i>
                </div>
                <span class="text-lime-100">Nom : <i class="text-emerald-500"><?php echo e($value->nom); ?></i></span>
                <span class="text-lime-100">Email : <i class="text-emerald-500"><?php echo e($value->email); ?></i></span>
                <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">*******************</i></span>
                <?php if(session('message')): ?>
                    <div id="session" class="w-full flex justify-center items-center">
                        <span class="text-lg text-lime-100 font-bold"><?php echo e(session('message')); ?></span>
                    </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div id="img" class="transition duration-100 ease-in-out relative flex flex-col justify-center items-center gap-1 w-full h-2/3 animate-pulse">
                        <img src="#" alt="empty" class="rounded-full abolsute w-60 h-60">
                    </div>
                    <span class="text-lime-100">Nom : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Email : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">Null</i></span>
            <?php endif; ?>
        </div>

        <div id="contain-all" class="element-hidden transition duration-100 ease-in-out fixed left-0 top-0 w-screen h-screen flex justify-center items-center flex-col z-30">
            <i class="fa fa-close transition duration-100 ease-in-out realtive translate-x-36 translate-y-10 z-10 text-3xl cursor-pointer"></i>
            <div id="change-profile" class="transition duration-100 ease-in-out relative w-88 h-80 bg-black rounded-xl flex flex-col justify-center itmes-center gap-2 animate-pulse">
                <div id="profile-img" class="transition duration-100 ease-in-out w-full h-2/3 flex justify-center items-center">
                    <img src="<?php echo e(asset('storage/'.$image)); ?>" alt="img" class="w-44 h-44 rounded-full">
                </div>
                <form action="<?php echo e(route('profile')); ?>" method="POST" enctype="multipart/form-data" id="form-profile">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file" id="file" accept="image/*">
                    <input type="submit" name="button" value="create" id="add">
                    <input type="submit" name="button" value="delete" id="delete">
                </form>
                <div id="button-div" class="transition duration-100 ease-in-out w-full h-1/3 flex justify-center items-center pl-2 pr-2">
                    <label for="delete" class="transition duration-100 ease-in-out relative w-40 h-12 text-2xl font-extrabold flex justify-center items-center">Supprimer</label>
                    <label for="file" class="transition duration-100 ease-in-out relative w-40 h-12 text-2xl font-extrabold flex justify-center items-center">Ajouter</label>
                </div>
            </div>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/profile.blade.php ENDPATH**/ ?>