	<?php
	$bdd = new PDO("mysql:host=localhost;dbname=utilisateur;","root","");
		session_start();
		if(isset($_post['username']) && isset($_post['password']))
		{
			$bd_username = 'root';
			$bd_password ='mot_de_passe_bdd';
			$bd_name = 'nom_bdd';
			$bd_host ='localhost';
			$bd = mysqli_connect($bd_host, $bd_username, $bd_password,$bd_name)
			           or die('could not connect to database');
			$username = mysqli_real_escape_string($db,htmlspecialchars ($_post['username']));
			$password = mysqli_real_escape_string($db,htmlspecialchars ($_post['password']));
			if($username !== "" && $password !== "")
			{
			    $requete = "SELECT count(*) FROM utilisateur where
			        nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
			    $exec_requete = mysqli_query($db,$requete);
			    $reponse      = mysqli_fetch_array($exec_requete);
			    $count = $reponse['count(*)'];
			    if($count!=0)
			    {
			       $_SESSION['username'] = $username;
			       header('localtion: principal.php');
			    }
			    else
			    {
			    header('location: login.php?erreur=1');
			    }
			 }
			 else
			 {
			 header('location: login.php');
			 }
			 mysqli_close($db);
			}
			 ?>               