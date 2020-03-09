<?php   
    session_start();
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>3ilShop</title>
  </head>  
  <body id="haut">   

<form action="InsererTicket.php" method="post" >
          <div class="form-group">
             <label for="exampleInputEmail1">Message</label>
             <input type="text" name="messag" id="mess"  class="form-control" aria-describedby="emailHelp" placeholder="Message du ticket">
          </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Identifiant</label>
             <input type="text" name="etat" id="idclient"  class="form-control" aria-describedby="emailHelp" placeholder="Identifiant">
          </div>  
          <div class="col-md-12 text-center ">
             <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Envoyer</button>
          </div>  
   </form>                    
  </body>
</html>