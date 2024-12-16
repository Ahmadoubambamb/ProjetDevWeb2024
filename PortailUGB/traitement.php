<?php
//recupertion du n mail et du mot de passe saisie dans la formulaire

$mail = $_POST['email'];

$paswd = $_POST['password'];

//hashage du mot de passe

$hashed_password = password_hash($paswd, PASSWORD_DEFAULT);

//connection à la base de données

$conn = mysqli_connect("localhost","root","mamekhady");

 if(!mysqli_select_db($conn,"portailugb"))
   echo "Error connecting to MySQL database";
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

//preparer la requete SQL pour recuperer les informations de l'utilisateur

$sql = "SELECT id_user, email, password FROM user WHERE email = '$mail' AND password = '$paswd';";

$result = mysqli_query($conn, $sql);

//vérifier si l'utilisateur existe et si le mot de passe correspond

if(mysqli_num_rows($result) > 0) {
    //ouvrir la session
    session_start();
    $_SESSION['loggedin'] = true;
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['email'] = $row['email'];
    }
    header("Location: list_poemes.php");
}
//sion execute le script.js qui afficher les messages d'erreur definit la bas
header("Location: page_de_connexion.php");
?>

