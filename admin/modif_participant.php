<?php
session_start();
if(!isset($_SESSION['login'])){//Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
//Appel du fichier de connexion
require_once('../connexion_db/conn_db.php');
//Récupération des données par la méthode POST
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$id_societe=$_POST['id_societe'];
$id=$_POST['id'];
//Définition de la requéte de modification
$sql_update="update participant set nom='$nom', prenom='$prenom',
            sexe='$sexe',email='$email', id_societe='$id_societe'
            where id='$id'";
//Exécution de la requéte
$query_update=mysqli_query($conn,$sql_update) or die(mysqli_error($conn));
header("location:liste_participants.php");
exit();
?>
