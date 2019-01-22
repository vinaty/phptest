<?php
//﻿© Valentin Dubrulle pour Manche Open School - TD PHP/MYSQL
session_start();
try
{
$bdd = new PDO('mysql:host=localhost; dbname=testmos; charset=utf8', 'testmosuser', 'testmosuser');//connexion a la BDD
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());//si la connexion a echoue, affichage du message d'erreur
}
function formatFrenchPhoneNumber($phoneNumber, $international = false){ 
//Supprimer tous les caractères qui ne sont pas des chiffres 
$phoneNumber = preg_replace('/[^0-9]+/', '', $phoneNumber); 
//Garder les 9 derniers chiffres 
$phoneNumber = substr($phoneNumber, -9); 
//On ajoute +33 si la variable $international vaut true et 0 dans tous les autres cas 
$motif = $international ? '+33 (\1) \2 \3 \4 \5' : '0\1 \2 \3 \4 \5'; 
$phoneNumber = preg_replace('/(\d{1})(\d{2})(\d{2})(\d{2})(\d{2})/', $motif, $phoneNumber); 

return $phoneNumber; 
} 
if($_SESSION["message"] == "co") {//passage qui sera actif lors de la connexion d'un utilisateur
$query = $bdd->query("SELECT * FROM users");//charge tout le tableau "users"
$hashpass = password_hash($POST["pass"], PASSWORD_BCRYPT);
while ($data = $query->fetch()) {
    if ($_POST["login"] == $data["login"] && ((password_verify($data["pass"], $hashpass)))) {//verifie si le login et le mot de passe sont ceux de la BDD
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;//chaque valeur de la BDD pour l'utilisateur est mis en parametres de la session
        		}
            $id['id'] = $_SESSION['id'];
				$bdd->prepare("UPDATE users SET dateco = NOW() WHERE id = :id")->execute($id);//envoie la modif du timestamp dans MySQL
        			$_SESSION['loggedin'] = true;
        		   header('Location: landing.php');
					exit;
        		}
        	}
        	$_SESSION["falselog"] = true;//ajoute un parametre en cas de mauvais parametre
        	header('Location: index.php');
        	exit;
}
elseif($_SESSION["message"] == "modif") {//passage qui sera actif lors de la modification des informations de l'utilisateur
if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST["email"])) {
$_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);
$_POST["telephone"] = formatFrenchPhoneNumber($_POST["telephone"]);
$allowed = ["nom","prenom","login","password","biographie","email","telephone", "addresse"]; //defini les clefs permises dans les fonctions a venir
$params = [];
$setStr = "";
foreach ($allowed as $key)
{
    if (isset($_POST[$key]) && (!empty($_POST[$key])))
    {
        $setStr .= "`$key` = :$key,";//index les parametres
        $params[$key] = $_POST[$key];//defini les valeurs a modifier
        $_SESSION[$key] = $_POST[$key];//modifi les parametres de la session
    }
}
$setStr = rtrim($setStr, ",");//met en forme la valeurs afin qu'elles soient comprise par MySQL
$params['id'] = $_SESSION['id'];
$bdd->prepare("UPDATE users SET $setStr WHERE id = :id")->execute($params);//envoie la modif dans MySQL
header('Location: landing.php');
exit;
}
$_SESSION["message"] = "l'adresse mail ou le numero de telephone n'est pas valide";
header('Location: echec.php');
exit;
}
elseif($_SESSION["message"] == "img") {//passage qui sera actif lors de la modification de l'avatar d'un utilisateur
if(isset($_POST["img"])) {
$bdd->prepare("UPDATE users SET avatar = ? WHERE id = ?")->execute(array($_POST["img"], $_SESSION["id"])); //envoie la modif dans MySQL
$_SESSION["avatar"] = $_POST["img"];
header('Location: landing.php');
exit();
}
//répertoire de destination
$target_dir = "../avatar/";
    $target_file = $target_dir . basename($_FILES["fileselect"]["name"]);
    //on initialise la variable update ok
    $uploadOk = 1;
    //on recup l'extention du fichier
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //on a cliqué sur le bouton qui s'appel submit
    if(isset($_POST["submit"])) {
        //fichier image?
        $check = getimagesize($_FILES["fileselect"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $_SESSION["message"] = "Le fichier n'est pas une image valide.";
                 header('Location: echec.php');
exit;
            $uploadOk = 0;
        }
    }

    // le poid de l'image
    if ($_FILES["fileselect"]["size"] > 500000) {
        $_SESSION["message"] = "Le fichier selectionné est trop volumineux.";
                 header('Location: echec.php');
exit;
        $uploadOk = 0;
    }
    // les formats autorisés
    if($imageFileType != "jpg" &&$imageFileType != "JPG"&& $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF") {
         
        $_SESSION["message"] = "Les images doivent etre au format: JPG, JPEG, PNG ou GIF.";
                        header('Location: echec.php');
exit;
        $uploadOk = 0;
    }
    // erreur
    if ($uploadOk == 0) {
        $_SESSION["message"] = "Erreur! impossible d'ajouter l'image.";
                 header('Location: echec.php');
exit;
         
    // tt c'est bien passé
    } else {
        if (move_uploaded_file($_FILES["fileselect"]["tmp_name"], $target_file)) {
             
                 
                $_SESSION["message"] = "Image ajoutée avec succès.";
                     
					$bdd->prepare("UPDATE users SET avatar = ? WHERE id = ?")->execute(array($target_file, $_SESSION["id"])); //envoie la modif dans MySQL
					$_SESSION["avatar"] = $target_file;
                 header('Location: landing.php');
						exit;
        } else {
            $_SESSION["message"] = "Erreur inconnue! Merci de retenter l'ajout plus tard ou de contacter l'administrateur.";
                 header('Location: echec.php');
exit;
        }
    }
}
elseif($_SESSION["message"] == "crea") {//passage qui sera actif lors de la creation d'un utilisateur
if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST["email"])) {
$_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);
$_POST["telephone"] = formatFrenchPhoneNumber($_POST["telephone"]);
$data = [$_POST["login"], $_POST["password"], $_POST["nom"], $_POST["prenom"], $_POST["biographie"],$_POST["email"],$_POST["telephone"], $_POST["addresse"]];//recuperation des valeurs entrees dans la page precedente au format souhaite
$sql = "INSERT INTO users (login, password, nom, prenom, biographie, email, telephone, addresse) VALUES (?,?,?,?,?,?,?, ?)";//preparation de la requete
$bdd->prepare($sql)->execute($data);//envoi de la requete a la BDD
header('Location: landing.php');
exit;
}
$_SESSION["message"] = "l'adresse mail ou le numero de telephone n'est pas valide";
header('Location: echec.php');
exit;
}
else {
$_SESSION["message"] = "Une erreur inconnue est survenue";//si aucune fonction n'est appele, il y a un probleme et donc, redirection sur la page d'erreur
header('Location: echec.php');
exit;
}
?>
