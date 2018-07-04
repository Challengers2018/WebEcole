<?php

error_reporting( ~E_NOTICE ); // avoid notice

	require_once 'dbconfig.php';
//session_start();

			//$successMSG = "Bienvenue administrateur  " .$_SESSION['nom_ad'];


if(isset($_POST['submit']))
	{
		$Code = $_POST['code_etudiant'];
		$Nom = $_POST['nom_utilisateur'];
		$Email = $_POST['email'];
		$Pass = $_POST['mot_passe'];
		$Re_pass = $_POST['confirmation'];


		$stmt = $DB_con->prepare('SELECT code_etudiant FROM enregistrer where code_etudiant=:code');
		$stmt->bindParam(':code',$Code);
		$stmt->execute();

		if($stmt->rowCount() > 0 )
		{
			$errMSG = "S'il vous plait rentrez le Code à nouveau, Code existe déjà.";
		}
		else if(empty($Code)){
			$errMSG = "S'il vous plait entrez le Code.";
		}
		else if(empty($Nom)){
			$errMSG = "S'il vous plait entrez le nom du candidat.";
		}
		else if(empty($Email)){
			$errMSG = "S'il vous plait entrez le p.........";
		}
		else if(empty($Pass)){
			$errMSG = "S'il vous plait entrez.............";
		}
		else if(empty($Re_pass)){
			$errMSG = "S'il vous plait entrez ................";
		}
		else if($Pass!=$Re_pass){
			$errMSG = "S'il vous plait incorecteeeeeee ................";
		}


		// s'il n'ya pas d'erreur pour continuer ....
		if(!isset($errMSG))
		{

			$aeskey = '4ldetn43t4aed0ho10smhd1l';
			$stmt = $DB_con->prepare('INSERT INTO enregistrer(code_etudiant,nom_utilisateur,email,mot_passe,confirmation) VALUES(AES_ENCRYPT(:code,"$aeskey"), :nom, :email, :pass, :re_pass)');
			$stmt->bindParam(':code',$Code);
			$stmt->bindParam(':nom',$Nom);
			$stmt->bindParam(':email',$Email);
			$stmt->bindParam(':pass',$Pass);
			$stmt->bindParam(':re_pass',$Re_pass);

			if($stmt->execute())
			{
				$successMSG = "Insertion reussi avec succes ...";
				header("refresh:2;login.php"); // actualiser dans 2 second
			}
			else
			{
				$errMSG = "erreur dans l'insertion....";
			}


		}
	}
  /*else if (isset($_POST['Annuler'])) {
    header("Location:login.php");
  }*/

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="css/style_register.css">
  <script src="js_format/cin.js" type="text/javascript"></script>
  <script src="js_format/bon_sans_lettre.js" type="text/javascript"></script>
<title>Enregistrer</title>
</head>



<body>
<div class="main">

	<?php
		if(isset($errMSG)){
				?>
	            <div class="alert alert-danger">
	            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
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
  <div class="titre"><h3>Connexion utilisateur</h3></div>



    <form method="POST" action="" id="formConnect">


        <div class="main-content">
        <p>  <label>Code</label>
            <input class= "input-code" type="text" placeholder="EX:00-0001" name="code_etudiant" autocomplete="off" onkeyup="verif(this);" value="<?php echo $Code; ?>"/>
          </p>


						<p><label>Nom utilisateur</label>
            <input type="text" name="nom_utilisateur" placeholder="Entrez votre nom d'utilisateur" value="<?php echo $Nom; ?>"/>
          </p>

					<p>  <label>Email</label>
            <input type="email" name="email"  placeholder="Entrez votre mot de passe" value="<?php echo $Email; ?>"/>
        </p>

						<p><label>Mot de passe</label>
            <input type="password" name="mot_passe" placeholder="Entrez votre mot de passe"/>
          </p>

          <p>  <label>Confirmer mot de passe</label>
            <input type="password" name="confirmation" placeholder="Entrez votre mot de passe" />
</p>
        </div>
          <br>


        <div class="button-confirmation" style="margin-top:25px;">
            <input name="submit" type="submit" value="Connecter" class="sup"/>
            <a href="login.php"><input name="submit" type="button" value="Annuler" class="sup"/></a>


      

           </div>
            <div class="loading1_1" id="loading1_1"><img src=".images/Demo/loader.gif"> Patientez...</div>
            <div class="clear"></div>
        </div>
    </form>

</div>

<script language="Javascript" >
var cleave = new Cleave('.input-code', {
delimiters: ['-', '-'],
blocks: [2, 4],
uppercase: true
});

</script>
</body>
 </html>
