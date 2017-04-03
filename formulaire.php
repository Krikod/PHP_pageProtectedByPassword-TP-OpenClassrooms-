<!DOCTYPE html>

<!-- Créer un formulaire qui appellera la page protégée et lui enverra le mot de passe -->

<html>
	<head>
		<meta charset="utf-8">
		<title>Page protégée par mdp</title>
	</head>
<body>
	<p>
		Veuillez entrer votre mot de passe:<br />
	</p>
	
	<form action="secret.php" method="post">
	<p>
		<input type="password" name="password" value="Mot de passe" />
		<input type="submit" value="Valider" />
	</p>
	</form>
	
</body>
</html>