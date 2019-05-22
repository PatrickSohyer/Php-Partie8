<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
  <head>
      
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Exercice 2, Partie 8</title>
    
  </head>
  
  <body class="colorBackgroundBody">
      
              <div class="text-center">
            <h1>EXERCICE 2, PARTIE 8</h1>
        </div>
        
        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
                            Il faudra afficher le contenu de ces variables sur la deuxième page. </i>
                    </div>
                </div>
            </div>
        </div>
      
      
      <div class="text-center mt-3">
      <p>Hey toi, je sais que ton prénom est <b id="firstname"><?= $_SESSION['firstname']; ?></b> et je sais aussi que ton nom est <b id="lastname"><?= $_SESSION['lastname']; ?></b>. Je dirais que tu as <b id="age"><?= $_SESSION['age']; ?></b> ans!</p>
      </div>
 
    
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>