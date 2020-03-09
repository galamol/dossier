<?php

    session_start();
    $dbh=new PDO("mysql:host=localhost;dbname=base2","root","root");

    $requete = $dbh->prepare('DELETE FROM ticket WHERE id_ticket=:id LIMIT 1');

    $requete->bindvalue(':id', $_GET['id_ticket'], PDO::PARAM_INT);

    $resultat = $requete->execute();

    if($resultat){
        echo "le ticket a été annulé";
    }
    else{
        echo "Echec d'annulation du ticket";
    }


?>