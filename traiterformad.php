<?php
    session_start();
    $maco=new PDO("mysql:host=localhost;dbname=base2","root","root");
   

    $textrequet="";
    $textrequet .="select nom,login,pass";
    $textrequet .="from admin";
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
    $_SESSION=$firstline["nom"];
   
}
else{
    header("location:PageAdmin.php");
    exit();
}

  
