<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/style.css', 'resources/js/script.js']); ?>
    <link rel="icon" href="114-user.ico">
    <title>Inscription/Connexion</title>
</head>
<body>
    <div id="container">
        <!-- Formulaire d'inscription -->
        <div class="container-form form-sign-up">
            <form action="#" method="POST">
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
                    <input type="text" name="nom" placeholder="Entrez votre nom" minlength="3" maxlength="30" title="Nom" pattern="[a-zA-Z]*[']{0,2}[a-zA-Z]*[\-]?[a-zA-Z]*[0-9]?" required>
                    <label class="label">Nom</label>
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <div>
                    <input type="email" name="email"
                        placeholder="Entrez votre email" minlength="10"
                        maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" required>
                    <label class="label">Email</label>
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                    <label class="label">Mot de passe</label>
                    <i class="fa fa-eye" id="eye"></i>
                </div>
                <div>
                    <input type="submit" value="Soumettre" title="Envoyer">
                    <br>
                    <span>Vous avez déjà un compte ? &nbsp; <a href="#" class="link-form">Connexion. &nbsp; <a href="whatsapp://send? phone=+237690552385">Aide?</a></a></span>
                </div>
            </form>
        </div>
        <!-- Formulaire de connexion -->
        <div class="container-form form-login">
            <form action="#" method="POST">
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
                    <input type="email" name="email" placeholder="Entrez votre email"  minlength="10" maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" required>
                    <label class="label">Email</label>
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                    <label class="label">Mot de passe</label>
                    <i class="fa fa-eye"></i>
                </div>
                <div>
                    <input type="submit" value="Soumettre" title="Envoyer">
                    <span>Pas encore de compte ? &nbsp; <a href="#" class="link-form">Inscription. &nbsp; <a href="mailto:youmschoco@gmail.com">Aide?</a></a></span>
                </div>
            </form>
        </div>
        <!-- Informations -->
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
        <div class="ears left"></div>
        <div class="ears right"></div>
    </div>

    <script charset="UTF-8" src="script.js"></script>
</body>
</html>
<?php /**PATH Y:\Projets Laravel\Ges_SALLES\resources\views/index.blade.php ENDPATH**/ ?>