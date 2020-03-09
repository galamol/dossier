<?php

    if((strlen($_POST['login']) > 0)  && (strlen($_POST['pass']) > 0))
    {

    
    session_start();
    $maco=new PDO("mysql:host=localhost;dbname=base2","root","root");
   

    $textrequet="";
    $textrequet .="select login,pass";
    $textrequet .="from client";
    $textrequet .="where login=:login and pass=:pass";//ne fonctionne pas pour les mots de passe cryptés


    $stmt=$maco->prepare($textrequet);  
    $stmt->bindParam(":login",$login);
    $stmt->bindParam(":pass",$pass);

    $login=$_POST['login'];
    //if not isset $Post...
    $pass=$_POST['pass'];

    
    $_SESSION['login'] = $_POST['login']; 
    $_SESSION['pass']  = $_POST['pass'];

    
    $stmt->execute();

    $tabres=$stmt->fetchAll(PDO::FETCH_ASSOC);//le nom de ce qu'il y a ds le tableau
    
    echo $textrequet;
    
if(count($tabres)>0){
    $firstline=$tabres[0];
    $_SESSION=$firstline["login"];
   
}
else{
       
    $stmt1 = $maco->query("SELECT id_client FROM client WHERE login ='$login' and pass='$pass' ");
    
    $idclient=$stmt1->fetch();

   
    if(!empty($idclient) ){           

        header("location:Menu.php");   

    }
    else{
       
        header("location:choix.php"); 
        echo "Votre Mot de passe et/ou login incorrect";
    }

    exit();
}
   
    }
    else{
        
        header("location:choix.php");
        echo "Votre Mot de passe et/ou login incorrect";
    }

  
