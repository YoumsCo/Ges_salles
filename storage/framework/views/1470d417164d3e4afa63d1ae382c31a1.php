<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/home.css', 'resources/js/home.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body>
        <?php if(session('message')): ?>
            <div id="session">
                <span><?php echo e(session('message')); ?></span>
                <i class="relative text-xl fa fa-close -right-80 cursor-pointer"></i>
            </div>
        <?php endif; ?>
        <?php if(session('notif')): ?>
            <div id="notif">
                <span><?php echo e(session('notif')); ?></span>
                <i class="relative text-xl fa fa-close -right-80 cursor-pointer"></i>
            </div>
        <?php endif; ?>

        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="container" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            "flex flex-col justify-start items-left flex-wrap gap-5"
        ]); ?>"
        >
            
            <div class="search relative transition duration-100 ease-in-out">
                <form action="<?php echo e(route('home')); ?>" method="GET" class="relative flex justify-around items-center gap-7" id="form-search">
                    <?php echo csrf_field(); ?>
                    <input type="search" name="search" class="bg-transparent w-80 h-10 text-white text-xl pl-3 pr-3" placeholder="Rechercher" value="<?php echo e(old('search') ?? ''); ?>">
                    <button type="submit" class="fa fa-search transition duration-100 ease-in-out text-white text-xl"></button>
                </form>
                <div id="picture_and_settings" class="transition-all duration-500 ease-in-out">
                    <a href="<?php echo e(route('profile')); ?>" class="flex justify-center items-center">
                        <img src="<?php echo e(asset('storage/'.$image)); ?>" alt="picture" id="img" class="animate-pulse hover:animate-none">
                    </a>
                    <i class="fa fa-sliders relative text-white text-2xl cursor-pointer">
                    </i>
                    <div id="menu" class="element-hidden transition-all duration-500 ease-in-out fixed top-14 right-10 flex justify-center items-center flex-col w-60 rounded-xl">
                        <ul id="list" class="relative w-full flex justify-center items-center flex-col gap-4 p-5 text-xl">
                            <div id="information" class="transition-all duration-500 ease-in-out flex justify-around items-center w-full">
                                <img src="<?php echo e(asset('storage/'.$image)); ?>" alt="image" class="transition-all duration-500 ease-in-out w-20 h-20 rounded-full animate-pulse">
                                <span class="text-white"><?php echo e(Auth::user()->nom); ?></span>
                            </div>
                            <li class="link w-full flex justify-left items-center"><a href="<?php echo e(route('profile')); ?>" class="fa fa-user-secret w-full flex justify-left items-center gap-2">Profile</a></li>
                            <li class="link w-full  flex justify-left items-center"><a href="<?php echo e(route('historique')); ?>" class="fa fa-book w-full flex justify-left items-center gap-2">Historique</a></li>
                            <li class="link w-full  flex justify-left items-center"><a href="#" class="fa fa-cogs w-full flex justify-left items-center gap-2">Paramètre</a></li>
                            <li class="link relative w-full flex justify-left items-center">
                                <a href="#" class="fa fa-mobile relative w-full flex justify-left items-center gap-2">
                                    Contact
                                </a>
                                <ul id="contact" class="element-hidden transition duration-100 ease-in-out absolute bg-black border-2 border-emerald-600 -left-48 top-0 w-40 flex justify-center items-left flex-col gap-4 p-3 rounded-xl">
                                    <li class="link"><a href="whatsapp://send?phone=+237690552385" class="fa fa-whatsapp relative flex justify-left items-center gap-2">Whatsapp</a></li>
                                    <li class="link"><a href="mailto:youmschoco@gmail.com" class="fa fa-envelope-o relative flex justify-left items-center gap-2">Email</a></li>
                                    <li class="link"><a href="tel:690552385" class="fa fa-phone relative flex justify-left items-center gap-2">Téléphone</a></li>
                                </ul>
                            </li>
                            <li class="link w-full  flex justify-left items-center">
                                <form action="<?php echo e(route('home')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="fa fa-sign-out w-full flex justify-left items-center gap-2">Deconnexion</button>
                                </form>
                            </li>
                            <?php if(Auth::user()->role === 'admin'): ?>
                                <li class="link w-full  flex justify-left items-center"><a href="<?php echo e(route('admin.user.index')); ?>" class="fa fa-users w-full flex justify-left items-center gap-2">Espace administrateur</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            
            <?php echo e($datas->links()); ?>


            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    "container-room",
                    "w-full h-100 flex flex-wrap"
                    ]); ?>"
                >
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        "container-img",
                        "w-1/2 h-100"
                    ]); ?>">
                        <img src="<?php echo e(asset('img/pexels-eberhard-grossgasteiger-1421903.jpg')); ?>" alt="Image" class="w-full h-full">
                    </div>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        "container-room-name",
                        "w-1/2 h-100 text-xl text-justify p-2 flex flex-col justify-center items-center gap-2"
                    ]); ?>">
                        <p class="flex items-center justify-center flex-col w-full gap-5 text-xl text-white  h-3/4">
                            <span><?php echo e($room->apercu); ?></span>
                            <button class="text-2xl font-extrabold border-4 flex justify-center items-center gap-1 w-1/3"><a href="<?php echo e(route('room', ['id' => $room->id])); ?>"><i class="fa fa-eye"></i>Voir</a></button>
                        </p>
                        <div class="relative flex items-center w-full h-20 gap-4 text-white translate-y-2 justify-evenly">
                            <a href="#" class="fa fa-map-marker underline text-center"><?php echo e($room->localisation); ?></a>
                            <button type="button" class="w-1/2 text-2xl h-3/4 font-extrabold"><a href="<?php echo e(route('reservation', ['id' => $room->id])); ?>">Reserver</a></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="text-white text-center text-3xl animate-bounce">Aucun resultat</span>
            <?php endif; ?>
            <?php echo e($datas->links()); ?>

        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/home.blade.php ENDPATH**/ ?>