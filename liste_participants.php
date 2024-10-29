<?php
//Appel du fichier de connexion à la bd
require_once('connexion_db/conn_db.php');
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
    <?php include "menu.php"; ?>
<table border="1" class="table table-striped" align="center">
    <h1 align="center">Liste des participants au séminaire</h1>

    <?php
        // Afficher le message de succès s'il existe
        if (isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
            // Supprimer le message après l'affichage
            unset($_SESSION['success_message']);
        }

        // Code pour afficher la liste des participants
        // ...
        ?>
    <br> 
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Sexe</th>
        <th>Société</th>
    </tr>
    <?php
    while($part=mysqli_fetch_array($query_part)){//Tant qu'on extrait des lignes sous forme de tableau associatif
        extract($part);
        echo"<tr>
                <td>$id</td>
                <td>$nom</td>
                <td>$prenom</td>
                <td>$email</td>
                <td>$sexe</td>
                <td>$nom_societe</td>
            </tr>";
    }
    ?>
</table>


</body>
</html>
