<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <title> Logowanie </title>
</head>
<body>

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
    <label for="id_log">login: </label>
    <input id="id_log" type="text" name="log" value="<?php out($form['log']); ?>" /> <br />

    <label for="id_has">hasło: </label>
    <input id="id_has" type="password" name="has" /> <br />

    <input type="submit" value="Zaloguj"/>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #F78468; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</body>
</html>