<?php
?>
     <!-- </table> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de restauration 3ilienne">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    
    
    <?php
    session_start();
    $dbh=new PDO("mysql:host=localhost;dbname=base2","root","root");

    $login1 = $_SESSION['login'];
    $pass1 = $_SESSION['pass'];

    var_dump($login1);  
    var_dump($pass1); 

    $stmt = $dbh->query("SELECT id_client FROM client WHERE login ='$login1' and pass='$pass1' ");
    
    $client=$stmt->fetch();

    
    var_dump($client) ; 

    echo $client['id_client']  ;   

    $id1 = $client['id_client'] ; 

   

    ?>  
    <?php
    $stmt1 = $dbh->query("SELECT * FROM ticket WHERE id_client ='$id1' ");

    $ticket = $stmt1->fetchAll();

    var_dump($ticket) ;

  while ($donnees = $stmt1->fetch()){?>
    <tr>
        <td><?php echo $donnees['id_ticket']?></td>  
        <td><?php echo $donnees['messag']?></td>
        <td><?php echo $donnees['etat']?></td>
        <td><?php echo $donnees['reponse']?></td>
        <td><?php echo $donnees['dateouvert']?></td>
        <td><?php echo $donnees['dateferm']?></td>
        <td><?php echo $donnees['id_client']?></td>
       
    </tr> 

<?php }?>   

    <title>3ilShop</title>
</head>
<body>
<header>
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                  <!--a class="navbar-brand" href="#haut"--><!--/3ilSHOPa-->
                  <a class="navbar-brand" href="#haut">
                      <img src="img/3illogo.png" alt="Logo 3ilSHOP">3ilSHOP
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="choix.php">Connexion<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Menu.php">Page d'accueil </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Menu.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="Boissons.php">Choix des boissons </a>
                          <a class="dropdown-item" href="Viennoiseries.php">Viennoiseries</a>
                          <a class="dropdown-item" href="Sandwich.php">Sandwich</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="Panier..php">Panier</a>
                        </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="incidents.php" >Contact </a>
                          <!--a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"--><!--/a-->
                      </li>
                      <li class="nav-item">
                              <a class="nav-link" href="Avis.php">Avis</a>
                             
                          </li>
                    </ul>
                  </div>
          </nav>
        </header>
        <div class="container-fluid" id="As">
                    <div class="row  align-items-center">
                      <div class="col-md-6">
                          <!-- <a href="#liste1" class="list-group-item list-group-item-action active ">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">Ticket n1 </h5>
                              <small>Envoyé il y a 3 jours</small>
                            </div>
                            <p class="mb-1">Statut:envoyé/traité/supprimé</p>
                           
                          </a> -->
                          <!--?php
                          while ($donnees = $stmt1->fetch()){

                          ?-->
                          <?php
                            
                            $stmt1 = $dbh->query("SELECT id_ticket FROM ticket WHERE id_client ='$id1' ");
  
                            $ticket = $stmt1->fetch();
  
                            var_dump($ticket) ;
  
                       foreach ( $stmt1->fetch() as $donnee ){?>
                          <a href="#liste2" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                           
                            <h5 class="mb-1">Ticket</h5> 
                              <!-- <h5 class="mb-1">Ticket 1</h5> -->
                              <small class="text-muted"><?php echo $donnees['dateouvert']?></small>
                            </div>
                            <p class="mb-1"> <?php echo $donnees['etat']?></p>                          
                          </a>
                          <?php }?>
                          <!--?php }?--> 
                          <!-- <a href="#liste3" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">Ticket n3</h5>
                              <small class="text-muted">Envoyé il y a 3 jours</small>
                            </div>
                            <p class="mb-1">Statut:envoyé/traité/supprimé</p>
                            
                          </a> -->
                          <div class="form-group">
                          <div class="col-md-12 text-right">
                          <a class="btn icon-btn btn-warning btn-primary btn-lg" href="#Deletelist"><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Supprimer un incident</a>
                       </div>
                       </div>
                      </div>
                        <div class="col-md-6 ">
                          <!------------------------>

       <!----------formulaire contact-------------->
       
                          <!--div class="container"-->
            <div class="row">
              <div class="col-md-6">
                <div class="well well-sm">
                  <form class="form-horizontal" action="" method="post">
                  <fieldset>
                    <legend class="text-align:left"><h1 color:white >Nouvel incident</h1></legend> 
                    
                    <!-- Name input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label text-align:left color:blue" for="name"> <h5>Nom d'utilisateur</h5> </label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                      </div>
                    </div>
            
                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email"> <h5>E-mail</h5></label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                            <label class="col-md-3 control-label" for="subject">
                                <h5>Sujet</h5></label>
                            <div class="col-md-9">
                            <select id="sujet" name="sujet" class="form-control" required="required">
                                <option value="na" selected="">Choisissez</option>
                                <option value="service">Incidents</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Autres</option>
                            </select>
                            </div>
                        </div> 

                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="message"> <h5>Message</h5></label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Entrer votre incident" rows="5"></textarea>
                      </div>
                    </div>
            
                    <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                      </div>
                    </div>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
        <!--/div-->
                            <!------ finformcontact---------->

                  
                           
                            <!-- <a class="btn icon-btn btn-success" href="ContactUs.php"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Ajouter un incident</a> -->
                          
</body>
</html>