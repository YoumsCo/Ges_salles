<?php
    use App\Http\Controllers\AdminController;
    $tools = new AdminController();
?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/Admin/side.css', 'resources/js/Admin/side.js']); ?>
<div id="container">
    <p class='text-center'>Espace administrateur</p>
    <li class='links'><a href='<?php echo e(route('home')); ?>'>Accueil</a></li>
    <li class='links'><a href='<?php echo e(route('admin.user.index')); ?>' class="<?php echo $tools->active('user') ?>">Gestion des utilisateurs</a></li>
    <li class='links'><a href='<?php echo e(route('admin.reservation.index')); ?>' class="<?php echo $tools->active('reservation') ?>">Gestion des reservations</a></li>
    <li class='links'><a href='<?php echo e(route('admin.room.index')); ?>' class="<?php echo $tools->active('room') ?>">Gestion des salles</a></li>
    <li class='links cursor-pointer'>
        <form action="<?php echo e(route('home')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type='submit' value='Déconnexion' class='cursor-pointer'>
        </form>
    </li>
</div>

<div id="menu" class="active-menu">
    <div></div>
    <div></div>
    <div></div>
</div>
<?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/Admin/layout/side.blade.php ENDPATH**/ ?>