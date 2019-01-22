<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
session_start();
$title = $_SESSION["prenom"];
include "header.php";
echo "<span>avatar</span><br><img src=\"", $_SESSION['avatar'], "\"/><br>";
foreach($_SESSION as $key=>$value) {
	//l'affichage ne doit pas se faire pour ces valeurs internes
	if (in_array($key, array("id", "password", "loggedin", "falselog", "avatar", "message"))){
	continue;
}
	elseif(in_array($key, array("dateco"))) {//on modifie le titre de la valeur "dateco" qui ne sera pas parlant pour l'utilisateur
		echo "<p><span>last loggin</span><br>".$_SESSION["dateco"]."</p>";
	}
else {
	//affichage des informations concernant l'utilisateur
	echo "<p><span>", $key."</span><br>".$value."<br></p>";
}
}
echo '<p><span>calendrier</span><br>';//il a ete evoque au cours du TP que l'affichage d'un calendrier pourrait etre sympathique
echo '<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23000000&amp;src=fr.french%23holiday%40group.v.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe><br></p>';
include "footer.php" ?>
