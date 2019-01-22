<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
$title = "Accueil";
include "header.php";
if( $_SESSION["falselog"] == true ) {//si l'utilisateur a eu une tentative de connexion, on veut qu'un message d'erreur apparaisse
	$display = '<div class="space">
					<h1 style="background-color: red; color: black; display:block">Mauvais login/mot de passe</h1>
					</div>';
}
else {
$display = '<div class="space"></div>';
}
?>
</div>
<?php echo $display; 
$_SESSION["message"] = "co";
?>
<div class="content">
<form action="action.php" method="post">
<p>login :<br>
<input type="text" name="login" required /></p>
<p>password :<br>
<input type="password" name="pass" required /></p>
<script>
grecaptcha.ready(function() {
grecaptcha.execute('6LdzR4MUAAAAAIjXWK8wsh37MBijCMHKgF9J7qfh', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>
<p>
<input type="submit" value="OK"></p>
</form>
</div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<a href="../adminer/adminer.php">acces a la BDD</a>
</body>
</html>
