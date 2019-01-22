<?php 
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
$title = "Oo0Oops!";
include "header.php";
if(isset($_SESSION["message"])) {
	echo "<p>", $_SESSION["message"] ,"</p>";
//a chaque erreur, la valeur de $_SESSION["message"] emet cette erreur afin d'orienter l'utilisateur vers la cause exact
}
?>
<?php include "footer.php" ?>
