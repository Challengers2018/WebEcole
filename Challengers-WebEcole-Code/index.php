<?php

	require_once 'dbconfig.php';
  session_start();

  if(isset($_SESSION['nom_utilisateur'])) {
  	?>
          <div class="col-xs-12">
          	<div class="alert alert-info">
  			<span class="glyphicon glyphicon-info-sign"></span>
  			<?php
  echo"Bienvenue ";
  echo $_SESSION['nom_utilisateur']." ";
              ?>
              </div>
          </div>
      <?php
  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Institution Soeur Lucie de Fatima</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="clear">

    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="register.php">Créer un compte</a></li>
        <li><a href="login.php">Se connecter</a></li>
    <li><a href="deconnecter.php" onclick="return confirm('Etes-vous sûr de vouloir deconnecter ?')" name="dec">    Se deconnecter        </a></li>
<li><a href="#">Kreyòl</a></li>
          <li><a href="#">Français</a></li>

      </ul>
    </nav>

  </div>
</div>

<div class="wrapper row1">

  <header id="header" class="clear">

    <div id="logo" class="fl_left">
      <div id="log">

  </div>

      <h1><a href="index.html"> Institution Soeur Lucie de Fatima</a></h1>

    </div>


    <div class="fl_right">
      <form class="clear" method="post" action="Recherche.php">
        <fieldset>
          <legend>Recherche:</legend>
          <input type="text" value="" placeholder="Recherche">
          <button class="fa fa-search" type="submit" title="Search"><em>Recherche</em></button>
        </fieldset>
      </form>
    </div>

  </header>
</div>

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear">

      <ul class="clear">
        <li class="active"><a href="index.html">Accueil</a></li>
          <li><a href="#">A propos</a></li>
        <li><a class="drop" href="#">Ecole</a>
          <ul>
            <li><a href="#">Administration </a></li>
            <li><a href="#">Professeur</a></li>
            <li><a href="#">Elève</a>
<ul>
  <li><a href="res.php">Résultat </a></li>
  <li><a href="#">Programme</a></li>
</ul>
            </li>
            <li><a href="#">Galerie</a>
<ul>
  <li><a href="#">Championnat Inter Classe</a></li>
  <li><a href="#">Génie </a></li>
  <li><a href="#">Anniversaire de la directrice </a></li>
</ul>
              </li>


          </ul>
        </li>

        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="#"> </a>Contact</li>


      </ul>
    </nav>
  </div>
</div>


<!--
<div class="wrapper">
	  <div id="slider">
    <div id="slide-wrapper" class="rounded clear">

      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/1.jpg" alt="" Width="100" height="100"></a>
        <figcaption>
          <h2>Présentation de L'institution</h2>
          <p>L’Institution Sœur Lucie de Fatima est une institution Laïque à but lucratif. Elle est située dans deux adresses :  </p>
          <p class="right"><a href="pages/suivre.html">Lire la suite &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-2"><a class="view" href="pages/suivre.html"><img src="images/demo/slider/2.jpg" alt=""></a>
        <figcaption>
          <h2> Notre Mission</h2>
          <p>L'Institution Soeur Lucie de Fatima a pour mission de préparer les enfants à la vie, à leur vie sociale et à leur vie personnelle... </p>
          <p class="right"><a href="pages/suivre.html">Lire la suite &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="pages/suivre.html"><img src="images/demo/slider/3.jpg" alt=""></a>
        <figcaption>
          <h2></h2>
          <p>L'Institution Soeur Lucie de Fatima a ete l'heureux gagnant du concours concausa 2017 organise par America solidaria en partenariat avec UNICEF... </p>
          <p class="right"><a href="pages/suivre.html">Lire la suite &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/4.jpg" alt=""></a>
        <figcaption>
          <h2></h2>
          <p>L'Institution Soeur Lucie de Fatima a ete l'heureux gagnant du concours concausa 2017 organise par America solidaria en partenariat avec UNICEF et NATIONS-UNIS (CEPAL).</p>
          <p class="right"><a href="pages/suivre.html">Lire la suite &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="pages/suivre.html"><img src="images/demo/slider/5.jpg" alt=""></a>
        <figcaption>
          <h2></h2>
          <p>Pour pouvoir élargir son champ de vocabulaires, l'Institution Soeur Lucie de Fatima participe à un concours'Jépelle au soleil' organisé par Radio Tele Soleil où elle est toujours...</p>
          <p class="right"><a href="pages/suivre.html">Lire la suite &raquo;</a></p>
        </figcaption>
      </figure>

      <ul id="slide-tabs">
        <li><a href="#slide-1">Présentation de l'institution</a></li>
        <li><a href="#slide-2"> Notre Mission</a></li>
        <li><a href="#slide-3">Nos Elèves</a></li>
        <li><a href="#slide-4">Nos Professeurs</a></li>
        <li><a href="#slide-5">Nos événements</a></li>
      </ul>


    </div>
  </div>
</div>-->

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">
      <!-- main body -->


        <!-- / Left Column -->
        <!-- Middle Column -->



        <div class="one_half">

          <h2>Nos Activités</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/soleil.png" alt="" width="60" height="70"></div>
              <p class="nospace btmspace-15">Participation de notre collège au fameux concour <a href="#">j'épèlle au Soleil</a>, organisé par<a href="#"> Radio télé soleil</a>.
               nos enfants onts toujours fait preuve d'intelligence et sont toujours parmis les finalistes. </p>
              <p>  </p>
            </li

            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/sport.png" alt=""></div>
              <p class="nospace btmspace-15">Nous promouvons le sport à Soeur Lucie de Fatima  et c'est pour cela que nou participons au championat inter scholaire
organisé par le <a href="#">Ministere de l'Educattion Natiole de la Jeunesse et des Sports</a> au parc Dadadou  à Delmas 3  . l'année dernière l'écple a été vice Champiom.
                </p>
            </li>
          </ul>
          <p class="right"><a href="#"> </a></p>

        </div>
        <!-- / Middle Column -->
        <!-- Right Column -->
        <div class="one_quarter sidebar">

          <div class="sdb_holder">
            <h3>Vidéo</h3>

            <div class="mediacontainer">

              <iframe width="360" height="315" src="https://www.youtube.com/embed/m9VO7X_q9nw"
            frameborder="0" gesture="media" allow="encrypted-media">
            </iframe>


            </div>
           </div>
          <div class="sdb_holder">
            <h6>Avis</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="#"><img src="images/demo/emploi.png" alt=""> Avis de recrutement</a></li>

            </ul>
          </div>

        </div>
        <!-- / Right Column -->
      </div>

      <div class="group">
        <h2></h2>
        <div class="one_quarter first">

          <ul class="nospace">

            <li><a href="#">Acceuil</a></li>
            <li><a href="#">Administration</a></li>
            <li><a href="#"> Nos Professeurs</a></li>
            <li><a href="essaie.html">Nos Elèves</a></li>

          </ul>

        </div>

        <div class="one_quarter">

          <ul class="nospace">
            <li><a href="#">Inscription</a></li>
            <li><a href="#"> Galerie</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Ecole d'adulte</a></li>

          </ul>

        </div>
        <div class="one_quarter">

          <ul class="nospace">

            <li><a href="#">Affaires des Elèves</a></li>
            <li><a href="#">Developement des Elèves </a></li>
            <li><a href="#">Technologie</a></li>
            <li><a href="#">Cour de Musique</a></li>
          </ul>

        </div>
      </div>

      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear">

      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="#">Trouvez nous avec Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
      <br>
          #24 Bis
         Pernier 48,Petion-Ville, Haiti P<br>

        <i class="fa fa-phone pright-10">
 </i> (509) (509)34174820  <br>
        <i class="fa fa-envelope-o pright-10"></i>Institutionsoeurluciedefatima@yahoo.com <a href="www.google.com"></a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Restez connectez avec nous!</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>

          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>

          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>

      </div>
    </footer>

  </div>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear">

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Chalengers</a></p>

  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.fitvids.min.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>
