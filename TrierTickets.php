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

<form action="tickettries.php" method="post" >
          <div class="form-group">
             <label for="exampleInputEmail1">Etat du ticket</label>
             <input type="text" name="trier" id="typeticket"  class="form-control" aria-describedby="emailHelp" placeholder="Etat du ticket">
          </div>
          <div class="col-md-12 text-center ">
             <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Trier</button>
          </div>  
   </form>                    
  </body>
</html>