<?php

error_reporting( ~E_NOTICE ); // avoid notice

 require_once 'dbconfig.php';
//session_start();

     //$successMSG = "Bienvenue administrateur  " .$_SESSION['nom_ad'];


if(isset($_POST['inscrire']))
 {
   $Nom = $_POST['nom'];
   $Prenom = $_POST['prenom'];
   $Sexe = $_POST['sexe'];
   $Date_Nais = $_POST['date_nais'];
   $Lieu_Nais = $_POST['lieu_nais'];
   $Section = $_POST['section'];
   $Classe1 = $_POST['classe1'];
   $Classe2 = $_POST['classe2'];
   $Classe3 = $_POST['classe3'];
   $Personne_responsable = $_POST['personne_responsable'];
   $Lien_parente = $_POST['liste'];
   $Preciser = $_POST['mots'];
   $Telephone = $_POST['telephone'];
   $Ecole_frequenter = $_POST['ecole_frequenter'];
   $Numero = $_POST['numero'];


		$imgFile = $_FILES['user_image']['name']; //ramener le nom de l'image
		$rep_tampon = $_FILES['user_image']['tmp_name']; //ramener le repertoire tampom de l'image
		$imgSize = $_FILES['user_image']['size']; //ramener la taille de l'image


 if(empty($Nom)){
     $errMSG = "S'il vous plait entrez le nom........";
   }
   else if(empty($Prenom)){
     $errMSG = "S'il vous plait entrez le prenom..........";
   }
   else if(empty($Sexe)){
     $errMSG = "S'il vous plait entrez le sexe.........";
   }

   else if(empty($Date_Nais)){
     $errMSG = "S'il vous plait entrez la date de naissance........";
   }

   else if(empty($Lieu_Nais)){
     $errMSG = "S'il vous plait entrez le lieu de naissance .........";
   }

   else if(empty($Section)){
     $errMSG = "S'il vous plait entrez section........";
   }

   else if(empty($Classe1)){
     $errMSG = "S'il vous c.........................";
   }
   else if(empty($Classe2)){
     $errMSG = "S'il vous .............";
   }

   else if(empty($Classe3)){
     $errMSG = "S'il vous pl.......................";
   }

   else if(empty($Personne_responsable)){
     $errMSG = "S'il vous pl..............";
   }

   else if(empty($Lien_parente)){
     $errMSG = "S'i............................";
   }
   else if(empty($Telephone)){
     $errMSG = "S'il vous plait..........................";
   }
     else if(empty($Ecole_frequenter)){
     $errMSG = "S'il vous plait..........................";
   }
  else if(empty($imgFile)){
			$errMSG = "S'il vous plait selectionner une image.";
		}
		else
		{
			$upload = 'rep_images/'; // repertoire transfere

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // ramener l'extension de l'image

			// extensions valide
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

			// renommer l'image transferer
			$userpic = rand(100,1000000).".".$imgExt;

			// valider le type de formats
			if(in_array($imgExt, $valid_extensions)){
				// checker la taille de l'image '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($rep_tampon,$upload.$userpic);
				}
				else{
					$errMSG = "Desole, votre image est trop large.";
				}
			}
			else{
				$errMSG = "Desole, seulement les fichiers JPG, JPEG, PNG, GIF sont acceptes.";
			}
		}


   // s'il n'ya pas d'erreur pour continuer ....
   if(!isset($errMSG))
   {
     $stmt = $DB_con->prepare('INSERT INTO inscription(nom,prenom,sexe,date_naissance,lieu_naissance,classe1,classe2,classe3,personne_responsable,lien_parente,precise,telephone,ecole_frequenter,section,photo,numero) VALUES(:nom, :prenom, :sexe, :date_n, :lieu_n, :cls1, :cls2, :cls3, :per, :lien, :pre, :tel, :ecole, :sec, :img, :num)');
     $stmt->bindParam(':nom',$Nom);
     $stmt->bindParam(':prenom',$Prenom);
     $stmt->bindParam(':sexe',$Sexe);
     $stmt->bindParam(':date_n',$Date_Nais);
     $stmt->bindParam(':lieu_n',$Lieu_Nais);
     $stmt->bindParam(':cls1',$Classe1);
     $stmt->bindParam(':cls2',$Classe2);
     $stmt->bindParam(':cls3',$Classe3);
     $stmt->bindParam(':per',$Personne_responsable);
     $stmt->bindParam(':lien',$Lien_parente);
     $stmt->bindParam(':pre',$Preciser);
     $stmt->bindParam(':tel',$Telephone);
     $stmt->bindParam(':ecole',$Ecole_frequenter);
     $stmt->bindParam(':sec',$Section);
     $stmt->bindParam(':img',$userpic);

     $stmt->bindParam(':num',$Numero);


     if($stmt->execute())
     {
       $successMSG = "Insertion reussi avec succes ...";
       header("refresh:2;index.php"); // actualiser dans 2 second
     }
     else
     {
       $errMSG = "erreur dans l'insertion....";
     }


   }
 }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Inscription</title>

    <style>

    	.main{
    	  width:750px;
    	  min-height:620px;
    	  border-radius:9px;
    	  font-family:Arial, Helvetica, sans-serif;
    	  background-color:#3B5998;
    	}

      .cacher {
         display:none;
      }
    </style>

    <script language="JavaScript">
    function afficherAutre() {
      var a = document.getElementById("autre");
      var m = document.getElementById("mots");

      if (document.form1.liste.value == "Autre")
      {
      	if (a.style.display == "none")
    		a.style.display = "block";

      	if (m.style.display == "none")
    		m.style.display = "block";
      }
      else
      {
      	a.style.display = "none";
    	m.style.display = "none";
      }


    }



    function affichersection(){
      var kid= document.getElementById("section");
      var classe1=document.getElementById("classe1");
      if (document.form1.liste1.value == "Kindergarten")
      {
        if (kid.style.display == "none")
  kid.style.display = "block";

        if (classe1.style.display == "none")
classe1.style.display = "block";
      }
      else
      {
        kid.style.display = "none";
classe1.style.display = "none";
      }
    }
    </script>

    
  </head>
<body>

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

    <div class="main">
      <div class="input-registration" style="margin-top:20px;">


    <form name="form1" action="" method="POST">

      <fieldset>

      <legend>Formulaire d'inscription</legend>

      	<input type="text" name="nom" size="50" placeholder="Nom" value="<?php echo $Nom; ?>">
      	<input type="text" name="prenom" size="50" placeholder="Prenom" value="<?php echo $Prenom; ?>"><br><br>
      	<label> Sexe 	</label><br>

      	<label for="">M </label><input type="radio" name="sexe" value="M" checked> <br>
      <label for="">F</label> <input type="radio" name="sexe" value="F"><br><br>


      	<div id="dn">
<label for="">Date de Naissance</label>
      <input type="date" name="date_nais" value="<?php echo $Date_Nais; ?>">


        <br><br>

      <label for="">Lieu de Naissance </label>
      	<input type="text" name="lieu_nais" placeholder="Lieu de naissance"  value="<?php echo $Lieu_Nais; ?>"> <br> <br>


      <td><label for="">Section</label></td>
      <td><select  name="liste1" onChange="affichersection()" value=" <?php echo $Section; ?>">
      	<option value="kindergarden"> Kindergarden</option>
      	<option value="fondamentale"> Fondamentale</option>
      	<option value="secondaire"> Nouveau Secondaire</option>
      	</select></td>
      <br><br>

            <label id=section style="display: none"> Classe :</label>
      <br><br>
      <td><select id="classe1"  name="classe1"  style="display: none"value="<?php echo $Classe1; ?>">
        	<option value="Petite section">Petite section</option>
      	<option value="Moyenne section">Moyenne section</option>
      	<option value="Grande section">Grande section</option>

      </select>
      </td>
      <br><br>

      <td><label id="section1" for="classe2"> Classe</label></td>
      <br><br>
      <td><select id="classe2" name="classe2" value="<?php echo $Classe2; ?>">
      	<option value="Première Année">Première Année</option>
      	<option value="Deuxième Année">Deuxième Année</option>
      	<option value="Troisième Année">Troisième Année</option>
      	<option value="Quatrième Année">Quatrième Année</option>
      	<option value="Cinquième Année">Cinquième Année</option>
      	<option value="Sixième Année">Sixième Année</option>
      	<option value="Septième Année">Septième Année</option>
      	<option value="Huitième Année">Huitième Année</option>
      	<option value="Neuvième Année">Neuvième Année</option>
      </select>
      <br><br></td>

      <td><label id="classe3" for="classe3"> Classe</label></td>
      <br><br>
      <td><select id="classe3" name="classe3" value="<?php echo $Classe3; ?>">
      	<option value="Secondaire I">Secondaire I</option>
      	<option value="Secondaire II">Secondaire II</option>
      	<option value="Secondaire III">Secondaire III</option>
      	<option value="Terminal">Terminal</option>
      </select>
      <br><br></td>





      <label for="">Personne Responsable</label>
      <input type="text" name="personne_responsable"  placeholder="Nom de la personne responsable"  value="<?php echo $Personne_responsable; ?>"><br><br>




      <label for="">Lien parenté</label>

      <select name="liste1" onChange="afficherAutre()" value="<?php echo $Lien_parente; ?>">
      		<option value="Père">Père</option>
      	<option value="Mère">Mère</option>
      		<option value="Autre">Autre</option>
      </select><br><br>

      <span id=autre style="display: none"> Préciser :</span>
        <input type="text" id="mots" name="mots" style="display: none" value="<?php echo $Preciser; ?>"> <br><br>



      <label for="">Ecole fréquenté</label>
      <input type="text" name="ecole_frequenter" size="100"  value="<?php echo $Ecole_frequenter; ?>"> <br> <br>

      <label for=""> Numero de téléphone de la personne responsable</label>
      <input id="Tel" name="telephone" size="50" placeholder="numéro de la personne responsable" value="<?php echo $Telephone; ?>">
      <br>
      <br>

      <label for=""> Numero </label>
      <input id="Tel" name="numero" size="50" placeholder="numéro" value="<?php echo $Numero; ?>">
      <br>
      <br>

      <label class="control-label">Photo</label></br>
        <input class="input-group" type="file" name="user_image" accept="image/*" />




      <br>
      <br>
      <input type="submit" name="inscrire" value="S'inscrire">


      </fieldset>




    </form>
</div>
</div>

  </body>
</html>
