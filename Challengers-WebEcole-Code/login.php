<?php
        if(isset($_POST["connecter"])){
						$nom_u = $_POST["nom_u"];
						$pass = $_POST["pass"];
						//$temp=date('d / M / Y h:i:s');
						session_start();
                    $idCon = @mysql_connect("127.0.0.1","root","");

			if(!$idCon){
						$ErreurMsg= "Erreur d'ouverture de la connexion";
						exit(0);
							}
						$ids = @mysql_select_db("DataBase_ecole",$idCon);
			if(!$ids){
					  $ErreurMsg= "Erreur de selection de la base";
					  exit(0);
							}

								$requete ="SELECT * FROM enregistrer where nom_utilisateur='$nom_u' and mot_passe='$pass'";
								$results = @mysql_query($requete,$idCon);
			if(!$results){
					  $ErreurMsg= "Erreur d'acces a la base";
					  exit(0);
							}
			if($ligne = mysql_fetch_array($results)){
					 $n = $ligne["nom_utilisateur"];
					 $p = $ligne["mot_passe"];

			 if(($n == $nom_u)&&($p ==$pass)){
				  $_SESSION['nom_utilisateur'] = $n;
					header("Location:index.php");

          				 //$successMSG = "Bienvenue  " .$_SESSION['nom_utilisateur'];
					 //$requete1 ="INSERT INTO audit(cin,nom,temp_debut) VALUES('$cin_adm','$nom_ad',NOW())";
					 //$results = @mysql_query($requete1,$idCon);
			 } else if($n !=$nom_u){
						 $ErreurMsg= "Nom ou mot de passe incorrect! ";
						 header("refresh:2;login.php");
				}
			}
			else{
			 $ErreurMsg= "Nom ou mot de passe incorrect! ";
			header("refresh:1;login.php");
			}

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="css/style_register.css">
<title>Authentication</title>
</head>

<div class="container">
	<?php
	if(isset($ErreurMsg)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $ErreurMsg; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>
 </div>

<body>
<div class="main">


  <div class="titre"><h3>Connexion utilisateur</h3></div>


    <div id="output"></div>


    <form method="post" action="login.php" id="formConnect">


        <div class="main-content">
          <label>Nom d'utilisateur</label>
            <input type="text" placeholder="nom utilisateur" name="nom_u"  autocomplete="off"></br>
                        <label>Mot de passe</label>
            <input type="password" name="pass" placeholder="Entrez votre mot de passe">
        </div>
      </br>

        <div class="button-confirmation">
            <input name="connecter" type="submit" value="Connecter" class="sup">
            <input type="reset" value="Annuler" class="an">


          <div class="oublier">  <a href="#"> Mot de passe oublié</a>

           </div>
            <div class="loading1_1" id="loading1_1"><img src=".images/Demo/loader.gif"> Patientez...</div>
            <div class="clear"></div>
        </div>
    </form>

</div>


</body>

<?php



 ?>

 </html>
