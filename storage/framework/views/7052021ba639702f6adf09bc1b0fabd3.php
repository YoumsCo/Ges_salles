<?php $__env->startSection('css_js_file'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/dark_css/style.css', 'resources/js/script.js']); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('icon'); ?>
    <link rel="icon" href="<?php echo e(asset('/icons/114-user.ico')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Inscription_Connexion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body>
        <?php if(session('message')): ?>
            <div class="w-full bg-green-300 text-center">
                <message class="text-black font-extrabold text-xl"><?php echo e(session('message')); ?></message>
            </div>
        <?php endif; ?>
        <?php if(session('fail')): ?>
            <div class="w-full bg-red-500 text-center">
                <message class="text-black font-extrabold text-xl"><?php echo e(session('fail')); ?></message>
            </div>
        <?php endif; ?>
        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="container">
            
            <div class="container-form form-sign-up">
                <form action="<?php echo e(route('auth')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-title">
                        <marquee direction="rigth">
                            <h1>Inscrivez-vous</h1>
                        </marquee>
                    </div>
                    <div id="accounts">
                        <i class="fa fa-google-plus"></i>
                        &nbsp;
                        <i class="fa fa-facebook-f"></i>
                        &nbsp;
                        <i class="fa fa-linkedin"></i>
                    </div>
                    <div>
                        <input type="text" name="nom" placeholder="Entrez votre nom" minlength="3" maxlength="30" title="Nom" pattern="[a-zA-Z]*[']{0,2}[a-zA-Z]*[\-]?[a-zA-Z]*[0-9]?" value="<?php echo e(old('nom') ?? ''); ?>" required>
                        <label class="label">Nom</label>
                        <i class="fa fa-user-circle-o"></i>
                        <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <error class="text-red-500 text-md text-justify font-bold"><?php echo e($message); ?></error>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Entrez votre email" minlength="10" maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" value="<?php echo e(old('email') ?? ''); ?>" required>
                        <label class="label">Email</label>
                        <i class="fa fa-envelope-o"></i>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <error class="text-red-500 text-md text-justify font-bold"><?php echo e($message); ?></error>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                        <label class="label">Mot de passe</label>
                        <i class="fa fa-eye" id="eye"></i>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <error class="text-red-500 text-md text-justify font-bold"><?php echo e($message); ?></error>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="none">
                        <input type="hidden" value="register" name="action">
                    </div>
                    <div>
                        <input type="submit" value="Soumettre" title="Envoyer">
                        <br>
                        <span>Vous avez déjà un compte ? &nbsp; <a href="#" class="link-form">Connexion. &nbsp; <a href="whatsapp://send? phone=+237690552385">Aide?</a></a></span>
                    </div>
                </form>
            </div>
            
            <div class="container-form form-login">
                <form action="<?php echo e(route('auth')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-title">
                        <marquee bgcolor="transparent" direction="rigth">
                            <h1>Connectez-vous</h1>
                        </marquee>
                    </div>
                    <div id="accounts">
                        <i class="fa fa-google-plus"></i>
                        &nbsp;
                        <i class="fa fa-facebook-f"></i>
                        &nbsp;
                        <i class="fa fa-linkedin"></i>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Entrez votre email"  minlength="10" maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" value="<?php echo e(old('email') ?? ''); ?>" required>
                        <label class="label">Email</label>
                        <i class="fa fa-envelope-o"></i>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <error class="text-red-500 text-md text-justify font-bold"><?php echo e($message); ?></error>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                        <label class="label">Mot de passe</label>
                        <i class="fa fa-eye"></i>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <error class="text-red-500 text-md text-justify font-bold"><?php echo e($message); ?></error>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="none">
                        <input type="hidden" value="login" name="action">
                    </div>
                    <div>
                        <input type="submit" value="Soumettre" title="Envoyer">
                        <span>Pas encore de compte ? &nbsp; <a href="#" class="link-form">Inscription. &nbsp; <a href="mailto:youmschoco@gmail.com">Aide?</a></a></span>
                    </div>
                </form>
            </div>
            
            <div id="container-info">
                <div class="container-info sign-up">
                    <div class="info">
                        <p>
                            Vous avez peut-etre un compte !
                        </p>
                        <button type="button" class="button">Connectez-vous</button>
                    </div>
                </div>
                <div class="container-info login">
                    <div class="info">
                        <p>
                            Vous n'avez pas de compte ?
                        </p>
                        <button type="button" class="button">Inscrivez-vous</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="ears top left"></div>
                <div class="ears top right"></div>
                <div class="ears bottom left"></div>
                <div class="ears bottom right"></div>
            </div>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/form.blade.php ENDPATH**/ ?>