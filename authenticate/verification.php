<?php
   session_start();
   $user = $_POST["username"];
   $pass = $_POST["password"];
    // connexion à la base de données
    require '../php/connection.php';
        $query = mysqli_query($conn, "SELECT * FROM sign_up WHERE (`name` = '$user' and `passwords` = '$pass')");

    $result = mysqli_num_rows($query);
    $result2 = mysqli_fetch_assoc($query);
    if($result >= 1){

      $_SESSION["username"] = $result2["name"];
      $_SESSION["userID"] = $result2["id"];
      // var_dump($result2);
      header("location: ../index.php");
    }
    else{

      header('Location: login.php?erreur=2'); // utilisateur ou mot de passe incorrect
    }
    mysqli_close($conn);
?>


<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion Ã  la base de donnÃ©es
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'base';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour Ã©liminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>