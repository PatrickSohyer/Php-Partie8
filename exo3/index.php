<?php
$regexLogin = '/^[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜ\']{3,15}[- \']?[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜ]{0,15}$/';
$regexPassword = '/^[A-Za-z0-9]{8,15}$/';

if (empty($_POST['login'])) {
    echo 'Merci de rentrer un login';
} elseif (empty($_POST['password'])) {
    echo 'Merci de rentrer un mot de passe';
} elseif (!preg_match($regexLogin, $_POST['login'])) {
    echo 'Votre nom ne peut pas comporter de chiffres';
} elseif (!preg_match($regexPassword, $_POST['password'])) {
    echo 'Votre mot de passe doit contenir seulement des lettres et des chiffres, et faire 8 caractères minimum';
} elseif (!isset($_POST['login']) and ! isset($_POST['password'])) {
    echo 'Je ne comprends pas votre demande';
} else {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', 'phpexercice');
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', 'phpexercice');
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Exercice 3, Partie 8</title>
    </head>
    <body class="colorBackgroundBody">

        <div class="text-center">
            <h1>EXERCICE 3, PARTIE 8</h1>
        </div>

        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-fluid"> 
            <div class="myForm">
                <div class="row mt-5">
                    <div class="col-4  mx-auto">
                        <form class="formExo3 text-center" method="post">
                            <label for="login">Login : <input type="text" id="login" name="login" /></label>
                            <label for="password">Password : <input type="password" id="password" name="password" /></label>
                            <input type="submit" class="btn btn-danger" id="submit" value="Valider" /> 
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="../exo4/index.php">Click ici pour voir tes cookies!</a>

        <p><?= $_COOKIE['login']; ?></p>
        <p><?= $_COOKIE['password']; ?></p>

        <p><a href="http://phpexercice/partie8/exo1/">Partie 8 exerice 1</a></p>
        <p><a href="http://phpexercice/partie8/exo2/">Partie 8 exerice 2</a></p>
        <p><a href="http://phpexercice/partie8/exo3/">Partie 8 exerice 3</a></p>
        <p><a href="http://phpexercice/partie8/exo4/">Partie 8 exerice 4</a></p>
        <p><a href="http://phpexercice/partie8/exo5/">Partie 8 exerice 5</a></p>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
