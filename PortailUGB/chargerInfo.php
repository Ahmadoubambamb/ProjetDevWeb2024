<?php
header('Content-Type: application/json'); // ajax
$conn = mysqli_connect("localhost", "root", "mamekhady", "portailugb");

if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Erreur de connexion à la base de données."]);
    exit();
}
 if(!mysqli_select_db($conn,"portailugb"))
    die("Connexion impossible a la BD");
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

for($i = 1; $i <=4 ; $i++) {
    $sql = "SELECT titre , contenu ,image FROM information WHERE id_information = 'I$i";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo json_encode(["titre"=>$row["titre"], "contenu"=>$row["contenu"], "image"=>$row["image"]]);
    mysqli_free_result($result);
}
mysqli_close($conn);
?>