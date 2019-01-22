<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
$title = "Modifier mon avatar";
include "header.php";
$_SESSION["message"] = "img";
?>
<p>mon image actuelle :</p>
<?php echo "<img src=\"", $_SESSION['avatar'], "\"/><br>";//on affiche l'avatar actuel ?>
<p>choisis ton avatar parmi la liste :</p>
<form method="POST" action="action.php" enctype="multipart/form-data">
<script>
grecaptcha.ready(function() {
grecaptcha.execute('6LdzR4MUAAAAAIjXWK8wsh37MBijCMHKgF9J7qfh', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>
<div class="space"></div>
<button type="submit" name="img" value="../avatar/logo.png"><img src="../avatar/logo.png"></button>
<button type="submit" name="img" value="../avatar/android.png"><img src="../avatar/android.png"></button>
<button type="submit" name="img" value="../avatar/krita.png"><img src="../avatar/krita.png"></button>
<button type="submit" name="img" value="../avatar/mos.png"><img src="../avatar/mos.png"></button>
<button type="submit" name="img" value="../avatar/mike.jpeg"><img src="../avatar/mike.jpeg"></button>
<button type="submit" name="img" value="../avatar/valentin.png"><img src="../avatar/valentin.png"></button>
<p>ou dans ta bibliotheque :</p>
<input type="file" id="fileselect" accept="image/*" name="fileselect" />
<input type="submit" name="envoyer" value="Envoyer le fichier">
<script>
grecaptcha.ready(function() {
grecaptcha.execute('6LdzR4MUAAAAAIjXWK8wsh37MBijCMHKgF9J7qfh', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>
</form>
<?php include "footer.php" ?>
