<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
session_start();
echo '<!DOCTYPE html>
<html>
<head>
<title>', $title, '</title>
<link rel="stylesheet" href="../css/style.css" />
<!-- il y a beaucoup de favicon car chaque navigateur a son affichage -->
<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="/../faviconmanifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script src="https://www.google.com/recaptcha/api.js?render=6LdzR4MUAAAAAIjXWK8wsh37MBijCMHKgF9J7qfh"></script>
</head>
<body>
<nav><header><h1>', $title, '</h1>';
if($title != "Accueil") {//fonctions qui vont etre en cours si l'on n'est pas sur index.php
if(!isset($_SESSION['login'])) {
header('Location: index.php');//si l'utilisateur n'est pas connecte, on veut qu'il retourne a l'index
exit();
}
echo '<ul>
<a href="landing.php">
<li>';
echo $_SESSION["prenom"];
echo '</li>
</a>
<a href="modifier.php">
<li>modification</li>
</a>
<a href="avatar.php">
<li>avatar</li>
</a>
<a href="creer.php">
<li>creation</li>
</a>
<a href="deco.php">
<li>deconnexion</li>
</a></ul>';
echo '</nav></header>
<div>';
}
else {
echo '</nav></header>';
}
?>
