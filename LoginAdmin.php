<?php   
    session_start();
    session_unset();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->    
    <meta charset="utf-8">
    <title>3ilShop</title>
  </head>
  <body id="haut">


      <form action="traiterformad.php" method="post" >
          <div class="form-group">
             <label for="exampleInputEmail1" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Nom d'utilisateur</label>
             <input type="text" name="login"  class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur 3il">
          </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Mot de passe admin</label>
             <input type="password" name="pass" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="MDP">
          </div>
          <div class="col-md-12 text-center ">
             <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login admin</button>
          </div>
      
         
   </form>

  </body>
</html>