<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page protégée par mdp</title>
	</head>
	<body>
	<?php
/* Aller plus loin:
créer une page contenant le formulaire s'appelant lui-même ET qui affichera le message secret */

	if (isset($_POST['password'])) 
	{
		if ($_POST['password'] == "kangourou") {
			echo "Le code d'accès au serveur central est: !fgeog_77vsdf;lrolgrs";
			} else {
			echo "Vous n'avez pas entré le bon mot de passe.";
			} 
		} else {
			?>
			<p>Veuillez entrer votre mot de passe:<br /></p>
			<form action="formulaire_1file.php" method="post">
				<p>
					<input type="password" name="password" />
					<input type="submit" value="Valider" />
				</p>
			</form>
			<?php
			}
			?>
	</body>
</html>




		
	
	

