<?php
session_start();
if(isset($_SESSION['nom_utilisateur'])) {
header("refresh:1;formresul.php");
}
else if(!isset($_SESSION['nom_utilisateur'])) {
?>
	<?php echo "oooooooooooooooooo"; ?>
<?php
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">

  <link rel="stylesheet" href="css/style_register.css">
<title>Resultat</title>
</head>

<body>
<div class="main">
	<div class="titre"><h3>Resultat</h3></div>
    <p class="texte"> Remplir tous les champs afin d'obtenir resultat</p>
    <div class="input-registration" style="margin-top:20px;">

            	<form name="register" action="register.php" method="post" id="form2">
                    <p>
                        <label>Code étudiant</label>
                        <input type="text" name="code" placeholder="Ex.:00-01" >
                    </p>

                    <p>
                        <label>Nom et prénom </label>
                        <input type="text" name="nom" placeholder="Ex.:Nom et prénom" >
                    </p>

										<p>
                      <td><label for="">Section</label></td>
                      <td><select class="" name="section">
                          <option value="Kindergarden"> </option>
                        <option value="Kindergarden"> Kindergarden</option>
                        <option value="fondamentale"> Fondamentale</option>
                        <option value="secondaire"> Nouveau Secondaire</option>
                        </select></td>
										</p>
                    <p>

                        <label for=""> Classe</label></td>
                        <br><br>
                        <td><select class="" name="kinder">
                          <option value=""></option>
                        	<option value="">Petite section</option>
                        	<option value="">Moyenne section</option>
                        	<option value="">Grande section</option>

                        </select>
                        </td>
                        <br><br>

                        <td><label for=""> Classe</label></td>
                        <br><br>
                        <td><select class="" name="fondamentale">
                          <option value=""></option>

                        	<option value="">Première Année</option>
                        	<option value="">Deuxième Année</option>
                        	<option value="">Troisième Année</option>
                        	<option value="">Quatrième Année</option>
                        	<option value="">Cinquième Année</option>
                        	<option value="">Sixième Année</option>
                        	<option value="">Septième Année</option>
                        	<option value="">Huitième Année</option>
                        	<option value="">Neuvième Année</option>
                        </select>
                        <br><br></td>

                        <td><label for=""> Classe</label></td>
                        <br><br>
                        <td><select class="" name="second">
                          	<option value=""></option>
                        	<option value="">Secondaire I</option>
                        	<option value="">Secondaire II</option>
                        	<option value="">Secondaire III</option>
                        	<option value="">Terminal</option>
                        </select>
                        <br><br></td>
                    </p>


  										<div class="button-confirmation" style="margin-top:25px;">

											<a href="resultat.php"><input name="submit" type="button" value="Resultat" class="res"/></a>
											<a href="index.php"><input name="submit" type="button" value="Annuler" class="res"/></a>

                        <div class="loading2"><img src="./images/Demo/loader.gif"><i> Enregistrement...</i></div>
                    </div>
                </form>

            </div>



</body>
