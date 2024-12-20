<?php
header('Content-Type: application/json'); // Forcer le type JSON pour AJAX
// Récupérer les données POST
$mail = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Connexion à la base de données
require("connexion_BD.php");
$conn = Connection();
//preparer la requete SQL pour recuperer les informations de l'utilisateur
$sql = "SELECT id_user, email, password FROM user WHERE email = '$mail' AND password = '$password';";

$result = mysqli_query($conn, $sql);
//vérifier si l'utilisateur existe et si le mot de passe correspond
if(mysqli_num_rows($result) > 0) {
    echo json_encode(["status" => "success", "message" => "Connexion réussie."]);
} else {
    echo json_encode(["status" => "error", "message" => "L'email ou mot de passe invalide."]);
}

// Fermer la connexion
$conn->close();
?>
