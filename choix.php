<?php   
    session_start();
    session_unset();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de restauration 3ilienne">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    
    


    <title>3ilShop</title>
  </head>
  <body id="haut">
      
      <!--**********************BARRE DE NAVIGATION**********************************************-->
     <?php
     include('Navbar.php');
     ?>

    <!--*************************HEADER******************************************-->

<div class="container-fluid base" >
  <div class="row d-flex align-items-center">
      <div class="col-7 col-md-6" >
      <!--*************************Form connexion******************************************-->
      <span><h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Connexion</h1></span>
      
     
      <!--*************************Fin form connexion******************************************-->


      <form action="traiterform.php" method="post" >
          <div class="form-group">
             <label for="exampleInputEmail1" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Nom d'utilisateur</label>
             <input type="text" name="login"  class="form-control" id="Username" required="required" aria-describedby="emailHelp" placeholder="Nom d'utilisateur 3il">
          </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Mot de passe</label>
             <input type="password" name="pass" id="password" required="required" class="form-control" aria-describedby="emailHelp" placeholder="MDP">
          </div>
          <div class="col-md-12 text-center ">
             <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" id="bouton_envoi">Login</button>
          </div>
          <div class="col-md-12 ">
             <div class="login-or">
                <hr class="hr-or">
                <span class="span-or">or</span>
             </div>
          </div>
          <div class="col-md-12 mb-3">
             <p class="text-center">
                <a href="#Administrateur" class="admin btn mybtn"><i class="fa fa-admin-plus">
                </i> Mode administrateur
                </a>
             </p>
          </div>
          <div class="form-group">
             <p class="text-center">Mot de passe oublié ?  <a href="ContactUs.php" id="signup">   Nous contacter</a></p>
          </div>
   </form>

         <!--*************************Fin form 2connexion******************************************-->


      </div>
      <div class="col-15 col-md-6 d-flex align-items-center">
          
            Ce site a été conçu pour faciliter la gestion des commandes à la cafeteria pour le bien être des étudiants de 3il
          <h2 style="text-align: center;" >Mode d'emploi</h2>
          <p class="text-justify">
              <ol>
                <li>Se connecter en tant qu'administrateur(pour des membres du BDE) ou utilisateur(pour passer une commande)</li>
                <li>Faire son choix</li>
                <li>Valider la commande après avoir verifié le panier</li>
              </ol>
              <div>
                <p>             
                  <a href="Avis.php">Plus d'infos</a>
                </p>
              </div>
          </p>
          </div>
      
          
          <!--**********************avis debut**********************************************-->
      

          
  </div> 

</div>

<!--**********************Formulaire de contact**********************************************-->
<div class="container-fluid" id="Contact">
  <div class="row">
    <div class="col-12-md-6"></div>
  </div>
</div>



 
    <!--h1 style="text-align: center;">Choix des boissons<--/h1>
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>