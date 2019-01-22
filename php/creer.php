<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
$title = "Creer un nouveau compte";
include "header.php";
$_SESSION["message"] = "crea";
?>
<p>Tout les champs sont a remplir obligatoirement</p>
<form action="action.php" method="post">
<?php
foreach($_SESSION as $key=>$value) {
	if (in_array($key, array("id", "loggedin", "falselog", "dateco", "avatar", "message"))){//ces parametres ne concernent pas l'utilisateur creant le compte et ne sont pas affiches
	continue;
}
	elseif (in_array($key, array("biographie", "addresse"))){
	echo "<p>", $key, "<br><textarea name='", $key, "' cols='20' rows='5'></textarea></p>";//affichage de la case pour la bio
}
else {
	echo "<p>", $key, "<br><input type='text' name='", $key, "'required/></p>";//affichage des cases a remplir avec les informations du compte
}
}
?>
<script>
grecaptcha.ready(function() {
grecaptcha.execute('6LdzR4MUAAAAAIjXWK8wsh37MBijCMHKgF9J7qfh', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>
<p><input type="submit" value="OK"></p>
</form>
<?php include "footer.php" ?>
