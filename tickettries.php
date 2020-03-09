
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>3ilShop</title>
  </head>
  <body id="haut">

  <?php   
 
    session_start();

    $dbh=new PDO("mysql:host=localhost;dbname=base2","root","root");


    if(isset($_POST['trier'])){

    $_SESSION['trier'] = $_POST['trier'];
 
    echo $_SESSION['trier'];   
    
    $choix = $_SESSION['trier']; 
   
    var_dump($choix);  

    $stmt1 = $dbh->query("SELECT * FROM ticket WHERE etat ='$choix' ");
    
    $ticket2 =$stmt1->fetchAll();       
 
    var_dump($ticket2) ;         
   
    }   
            
?>
      
    

  </body>
</html>