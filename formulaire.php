<?php

    session_start();
    session_unset();
?>

<html>

    <head>
        <meta charsert="utf-8">
        <title>Page de connexion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    </head>

    <body  class="container">

        <h1>FORMULAIRE <br>
        <small>Version 1 : un autre script traite les données envoyées</small>
         </h1>


        
        <form action="traiterform.php" method="POST">
            <label for="inputNom">Login : </label>
            <input type="text" name="login" id="login" required="required" placeholder="saisissez votre login" class="form-control"><br>
            <span id="login_manquant"></span><br>

            <label for="inputPrenom">Password : </label>
            <input type="password" name="pass" id="password" required="required" placeholder="saisissez votre mot de passe" class="form-control" > 
            <br>
            <button type="submit" class='btn btn-warning' id="bouton_envoi">Valider</button>
        </form>

        <script>
            var validation=document.getElementById('bouton_envoi');
            var login=document.getElementById('login');
            validation.addEventListener('click',f_valid);
            var login_m=document.getElementById('login_manquant');

            function f_valid(e){
                if(login.valueMissing){
                    e.preventDefault();
                    login_mstyle.color='red'
                }
            }
        </script>

    </body>

</html>