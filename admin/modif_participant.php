<?php
session_start();
if(!isset($_SESSION['login'])){//Si la variable session n'a pas �t� cr�ee
    header("location:index.php");
    exit();
}
//Appel du fichier de connexion
require_once('../connexion_db/conn_db.php');
//R�cup�ration des donn�es par la m�thode POST
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$id_societe=$_POST['id_societe'];
$id=$_POST['id'];
//D�finition de la requ�te de modification
$sql_update="update participant set nom='$nom', prenom='$prenom',
            sexe='$sexe',email='$email', id_societe='$id_societe'
            where id='$id'";
//Ex�cution de la requ�te
$query_update=mysqli_query($conn,$sql_update) or die(mysqli_error($conn));
header("location:liste_participants.php");
exit();
?>
