<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/Admin/list.css', 'resources/js/Admin/list.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/003-home3.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Liste des utlisateurs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-start items-start gap-6 w-screen h-screen bg-black">

        <?php echo $__env->make('Admin.layout.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(session('message')): ?>
            <div id="session" class="transition-all duration-500 ease-in-out fixed top-0 left-1/3 text-white w-80 h-40 flex justify-center items-center z-10 border-2 border-white">
                <span class="transition-all duration-500 ease-in-out bg-black w-10/12 flex justify-center items-center flex-wrap text-center font-extrabold text-xl rounded-xl p-2"><?php echo e(session('message')); ?></span>
                <i class="fa fa-close abslute top-0 right-4 -translate-y-16 cursor-pointer text-2xl"></i>
            </div>
        <?php endif; ?>

        <h1 class="transition-all duration-500 ease-in-out w-full text-center text-white text-5xl pt-5 pb-5">Liste des utilisateurs</h1>

        <div id="contain-search-bar" class="transition-all duration-500 ease-in-out relative w-screen flex justify-start items-center flex-wrap gap-2">
            <form action="<?php echo e(route('admin.user.index')); ?>" method="GET" class="transition-all duration-500 ease-in-out w-80">
                <?php echo csrf_field(); ?>
                <input type="text" name="search" class="transition-all duration-500 ease-in-out w-full h-10 pl-2 pr-10 bg-transparent border-2 border-white text-xl text-white placeholder:text-white shadow-md shadow-white" placeholder="Rechercher..." value="<?php echo e(old('search') ?? ''); ?>">
                <button type="submit" class="fa fa-search transition-all duration-500 ease-in-out absolute top-1 left-72 text-xl"></button>
            </form>
        </div>

        <table class="transition-all duration-500 ease-in-out w-full text-center text-white border-2 border-white">
            <tr>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">id</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Nom</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Email</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Voir</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Supprimer</th>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white"><?php echo e($data->id); ?></td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white"><?php echo e($data->nom); ?></td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white"><?php echo e($data->email); ?></td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white"><a href="<?php echo e(route('admin.user.show', $data->id)); ?>" class="fa fa-eye text-2xl text-lime-200 hover:cursor-pointer"></a></td>
                    <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">
                        <form action="<?php echo e(route('admin.user.destroy', $data->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="fa fa-trash-o text-2xl text-red-500 hover:cursor-pointer"></button>
                        </form>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                    </tr>

            <?php endif; ?>
        </table>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/Admin/user/list.blade.php ENDPATH**/ ?>