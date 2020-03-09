<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
?>
<link href="StyleContact.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">
<body >
    <?php
    include('Navbar.php');
    ?>
    <section class="contact pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-ml-16 mx-auto text-center">
                  <div class="section-title mb-100">
                     
                     <h4>Contact Us</h4>
                  </div>
               </div>
            </div>
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="#" class="contact-form">
                        <div class="row">
                           
                           <div class="form-group">
                            <label for="name"><h4>Nom d'utilisateur</h4>
                                </label>
                            <input type="text" class="form-control" id="Username" placeholder="Nom d'utilisateur 3il" required="required" />
                        </div>
                           <div class="col-md-5">
                              <!-- <input type="text" placeholder="subject"> -->
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="sujet" name="sujet" class="form-control" required="required">
                                <option value="na" selected="">Choisissez</option>
                                <option value="service">Panne de service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Autres</option>
                            </select>
                        </div>
                           </div>
                           <!-- <div class="col-xl-6"> -->
                              <!-- <input type="text" placeholder="telephone"> -->
                           <!-- </div> -->
                           <div class="col-md-6">
                              <textarea placeholder="Entrer votre message" cols="40" rows="10"></textarea>
                               <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Adresse</h5>
                        <p>43 rue de Sainte-Anne, 87000 Limoges, France</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>Galamol@3il.fr</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>
</body>