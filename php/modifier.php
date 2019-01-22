<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
$title = "Modifier mes informations";
include "header.php";
$_SESSION["message"] = "modif";
?>
<form action="action.php" method="post">
<?php
foreach($_SESSION as $key=>$value) {
	if (in_array($key, array("id", "image","loggedin","falselog", "avatar", "dateco", "message"))){//pas d'affichage pour ces valeurs
	continue;
}
	elseif (in_array($key, array("password",))){
	echo "<p>", $key, "<br><input name='", $key, "' placeholder='entrez votre mot de passe' type='password'/></input></p>";//le mot de passe n'est pas affiche en placeholder
}
elseif (in_array($key, array("biographie", "addresse"))){
	echo "<p>", $key, "<br><textarea name='", $key, "cols='20' rows='5'>$value</textarea></p>";//la categorie "bio" demande une case specifique
}
else {
	echo "<p>", $key, "<br><input type='text' name='", $key, "' value='",$value, "'/></p>";//affichage des differents parametres
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
