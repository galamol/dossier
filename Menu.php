<?php
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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

    <table class="orders_details" width="100%" border="0" cellspacing="0" cellpadding="5" style="text-align:center">
    <tr>
        <th>ID_TICKET</th>
        <th>MESSAGE</th>
        <th>ETAT</th>
        <th>REPONSE</th>
        <th>DATEOUVERTURE HT</th>
        <th>DATEFERMETURE</th>
        <th>IDCLIENT</th>
    </tr> 
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
     </table>

     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
      <!--link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet"-->
      <link href="StyleMenu.css" rel="stylesheet">

      <body id="haut">
          <?php
            include('Navbar.php');
            ?>
          <section class="about-area pt-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 mb-60">
                  <div class="section-title text-center">
                     <p>Facile et efficace</p>
                     <h4>Bienvenue à 3iShop!!</h4>
                  </div>
               </div>
            </div>
            <div class="row menu_style1">
               <div class="col-md-4">
                  <div class="single_menu_list" >
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Sandwich<span>A partir de 3.00 E</span></h4>
                        <p>Dans cette rubrique on vous propose des sandwichs avec le chargement de votre choix</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg" alt="">
                     <div class="menu_content">
                        <h4>Boissons  <span>2.60 E</span></h4>
                        <p>Vous avez soif,vous voulez accompagner votre menu ?!Ne vous inquietez pas!Boissons gazeuses ou fruitées,eau plate...à vous de choisir!!<p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
                     <div class="menu_content">
                     <h4>Viennoiseries<span>0.5 E</span></h4>
                        <p>Dans cette rubrique on vous propose des viennoiseries telles que les croissants,pain choco,...</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                     <div class="menu_content">
                        <a href="boissonchaudes.php"><h4>Boissons chaudes<span>DES 0.45 E</span></h4></a>
                        <p>nous vous proposons ici une tasse de café,de thé ,de lait pour bien entamer la matinée:) </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                     <div class="menu_content">
                        <h4>Menu 3ishop<span>DES 3.00 E</span></h4>
                        <p>Nous avons aussi des menu composés pour vous!!Jetez-y un coup d'oeil </p>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div> -->
               <!-- <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="row pb-60">
               <div class="col-xl-12 text-center">
                  <div class="box_btn">
                     <!-- <a href="#">load more</a> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
     </body>
   
          
  
