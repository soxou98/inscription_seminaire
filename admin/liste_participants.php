<?php
session_start();
if(!isset($_SESSION['login'])){//Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
//Appel du fichier de connexion à la bd
require_once('../connexion_db/conn_db.php');
//Définition de la requête de sélection
$sql_part="select * from participant natural join societe";
//Exécution
$query_part=mysqli_query($conn,$sql_part) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste des participants</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
</head>
<body>
    <?php include"menu.php" ?>
<table border="1" class="table table-striped">
    <h1 align="center">Liste des Participants Admin</h1>
    <br>
    <tr>
        
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Sexe</th>
        <th>Société</th>
        <th>Modification</th>
        <th>Suppression</th>
    </tr>
    <?php
    while($part=mysqli_fetch_array($query_part)){//Tant qu'on extrait des lignes
        extract($part);
        echo"<tr>
                
                <td>$nom</td>
                <td>$prenom</td>
                <td>$email</td>
                <td>$sexe</td>
                <td>$nom_societe</td>
                <td>
                <a href='fiche_participant.php?id=$id'>Editer</a>
                </td>
                <td>
                <a href='supprim_participant.php?id=$id'
                    onclick=\"return confirm('Voulez vous supprimer $nom ? Oui ou Non?');\">Supprimer</a></td>
            </tr>";
    }
    ?>
</table>


</body>
</html>
