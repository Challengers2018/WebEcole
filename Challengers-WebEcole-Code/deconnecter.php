<?php
session_start();
session_unset();
session_destroy();
header("Location:index.php");

				/*$idCon = @mysql_connect("127.0.0.1","root","");
				$ids = @mysql_select_db("vote",$idCon);

								$req=mysql_query("select max(id) from audit;" );
								$res=mysql_result($req,0,"max(id)" );
								//echo $res;
								 $requete2 ="UPDATE audit SET temp_fin=NOW() where id='$res'";
								 $resultss = @mysql_query($requete2,$idCon); */


?>
