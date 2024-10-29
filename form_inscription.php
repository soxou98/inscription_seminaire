<?php
//Appel du fichier de connexion
require_once('connexion_db/conn_db.php');
//Définition de la requête
$sql_soc="select * from societe";
//Exécution de la requête
$query_soc=mysqli_query($conn,$sql_soc) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">

</head>
<body>
    <?php include "menu.php"; ?><div class="container col-md-8 col-xs-12 col-sm-12 col-md-offset-3">
    <div class="card ">
        <div class="card-header bg-info", align="center"><h1>Formulaire d'inscription au séminaire</h1></div>
        <table border="3" class="table table-striped">
        <div class="card-body">
            <form method="POST" action="ajout_participant.php">

                <div class="form-group">
                    <label class="control-label">Nom :</label>
                    <input type="text" name="nom" placeholder="Votre nom" class="form-control" required><br>
                </div>

                <div class="form-group">
                    <label class="control-label">Prénom :</label>
                    <input type="text" name="prenom" placeholder="Votre prenom"  class="form-control " required><br>
                </div>

                <div class="form-group">
                    <label class="control-label">Sexe :</label>
                    F <input type="radio" name="sexe" value="Feminin">
                    M <input type="radio" name="sexe" value="Masculin">
                </div>
                <br>

                <div class="form-group">
                    <label class="control-label">Email :</label>
                    <input type="text" name="email" placeholder="Entrer votre adresse mail" class="form-control" required><br>
                </div>

                <div class="form-group">
                    <label class="control-label">Société :</label>
                    <select type="text" name="id_societe" placeholder="nom de la société" class="form-control" required><br>
                        <option>Sélectionnez</option>
                        <?php
                        //exploitation des données
                        while($soc=mysqli_fetch_row($query_soc)){
                            echo"<option value='$soc[0]'>$soc[1]</option>";
                        }
                        ?>
                    </select>
                    </div>
                    <br> 
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                       
                    <input id="bouton" type="submit" name="bInscrire" value="S'inscrire" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
</table>
</body>
</html>

