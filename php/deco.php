<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
session_start();
unset($_SESSION);//supprime tout les parametres de la session
session_unset();
session_destroy();//detruit la session
header('Location: index.php');//retour a l'accueil
exit;
?>
