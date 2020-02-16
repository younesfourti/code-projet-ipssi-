<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Football-HUB</title>

      <!-- CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
      <link rel="stylesheet" href=css/main.css>
      <!-- .CSS -->

      <!-- Font -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet"> 
      <script src="https://kit.fontawesome.com/d32bce849a.js" crossorigin="anonymous"></script>
      <!-- .Font -->
   </head>

	<link rel="stylesheet" type="text/css" href="css\index.css" />


<body>
<?php include("code_header.php");?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="block">
         <div class="banner">
            <img src="img/bgphoto.jpg" alt="Un appareil photo" class ="banner-image">
            <div class="banner-content">
               <h1 class="title is-1">Bienvenue sur <i>Football-HUB</i></h1>
               <h2 class="subtitle">Fan de foot ? Achetez votre billet tout de suite !<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></h2>
               <form  action="boutique.php">
                  <button class="button is-link" href=' boutique.php'>boutique</button>
                  
               </form>
               <br /><br /><br />
               <form  action="Billeterie.php">
                  
                  <button type="submit" class="button is-link" href=' Billeterie.php'>Billeterie</button>
               </form>
               
            </div>
         </div>
      </div>
      <!-- .banner -->

      <!-- colonnes -->
      <div class="block">
         <div class="container about">
            <div class="columns">
               <div class="column about-single-element"> 
                     <i class="fas fa-futbol icon"></i>
                     <p>Pratiqué en 2006 par environ 264 millions de joueurs à travers le monde, le football possède le statut de sport numéro un dans la majorité des pays. Certains continents, comme l'Afrique, l'Amérique du Sud et l'Europe, sont même presque entièrement dominés par cette discipline.

                     </p>
               </div>

               <div class="column about-single-element"> 
                  <i class="fas fa-tshirt icon"></i>
                  <p>Football-HUB mets en vente les billets de vos matchs préférés, à venir et même ceux passés !
                  </p>
               </div>

               <div class="column about-single-element">
                  <i class="fas fa-credit-card icon"></i>
                  <p>Lors d'un paiement sur internet, les sites web utilisent généralement une connexion chiffrée de type HTTPS entre l'ordinateur du particulier et celui du service de paiement. La grande majorité des navigateurs Web affichent un petit cadenas dans un des coins de l'écran.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- .colonnes -->


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="src/js/main.js"></script>
	
</body>

</html>