<?php
//acces Admin.php
    session_start();
    if($_SESSION["role"]!="admin"){

        header("location::urlconnexion");
        exit();
        die("quitte ici chouagne!!");
       
    }
    //si on est là alors on est admin
        echo "Page d'accueil Admin";
        
    
