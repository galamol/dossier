<?php   
    session_start();
    $dbh =new PDO("mysql:host=localhost;dbname=base","root","root");

    
    $login1 = $_SESSION['login'];
    $pass1 = $_SESSION['pass'];

    $stmt = $dbh->query("SELECT id_client FROM client WHERE login ='$login1' and pass='$pass1' ");
    
    $client=$stmt->fetch();
  
    $id1 = $client['id_client'] ; 

    $requete = $dbh->prepare("INSERT INTO ticket(id_ticket, messag, etat, reponse, dateouvert, dateferm, id_client)
                              VALUES(?, ?, ?, ?, ?, ?, ?)");
     $requete->execute(array("5", $_POST['messag'],"ouvert" , 
     "","2020-02-05 12:15:00", "2020-02-05 12:24:00", "2"));

    
  // l'insertion marche mais il faut pouvoir insérer les bonnes valeurs 
  // Comment inserer le bon identifiant du ticket ?
  // Comment insérer la date de l'ordi ? ( date d'ouverture )
  // Je vais devoir gérer la date de fermeture car c'est l'admin qui ferme un ticket 
  // Pour l'id c'est pas un soucis je réussis à avoir le bon id 

    

?>
