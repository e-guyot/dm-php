<?php
if (!is_session_started() {
	session_start();
	header('Location: Connexion');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
</head>
<body>
<form action="/Controller" method="post">
<input type="text" name="username" placeholder="pseudo" required>
<input type="password" name="pwd" placeholder="password" required>
<button type="submit">Valider</button>
</form>
</body>
</html>