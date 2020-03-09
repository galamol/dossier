<?php
    //fichier correction pour prendre le role
    session_start();
    $role=$_GET["role"]; //on suppose que $_GET["role"] existe
    $_SESSION["role"]=$role;

    //pour tester:
    //www.monserveur.org/rep/correction.php?role=admin