<?php
setcookie('password', 'Thisisanewpassword', time() + 365 * 24 * 3600, '/', 'phpexercice');
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Exercice 5, Partie 8</title>
    </head>
    <body class="colorBackgroundBody">

        <div class="text-center">
            <h1>EXERCICE 5, PARTIE 8</h1>
        </div>

        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</i>
                    </div>
                </div>
            </div>
        </div>


        <p class="text-center mt-3">Votre login est : <b id="login"><?= $_COOKIE['login']; ?></b>!</p>
        <p class="text-center">Votre mot de passe est : <b id="password"><?= $_COOKIE['password']; ?></b>!</p>

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