<?php
session_start();
if(isset($_SESSION['login'])){//Si la variable session a été crée
    header("location:liste_participants.php");
    exit();

}
if(isset($_POST['Bconnexion'])){//SI on clique sur le bouton connexion
    //Appel du fichier de connexion ˆ la bd
    require_once('../connexion_db/conn_db.php');
    //Recupération des données par la méthode POST
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    $mdpHash=sha1($mdp);
    //Définition de la requete de selection
    $sql_auth="select count(*) nbl from admin where login='$login' and mdp='$mdpHash'";
    $query_auth=mysqli_query($conn,$sql_auth) or die(mysqli_error($conn));
    $auth=mysqli_fetch_object($query_auth);
    if($auth->nbl==1){//Si l'authentification est correcte
        //Création d'une variable session
        $_SESSION['login']=$login;
        header("location:liste_participants.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
</head>
<body>
<div class="container col-md-7 col-xs-12 col-sm-12 col-md-offset-3">
        <div class="card">
            <div class="card-header bg-info text-center"><h2>Authentification</h2></div>
            <div class="card-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
                    <div class="form-group">
                        <label class="control-label">Login</label>
                        <input class="form-control" type="text" name="login">
                    </div>
                    <br> 
                    <div class="form-group">
                        <label class="control-label">Mot de passe</label>
                        <input class="form-control" type="password" name="mdp">
                    </div>
                    <br> 
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input id="bouton" class="btn btn-info" type="submit" name="Bconnexion" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
