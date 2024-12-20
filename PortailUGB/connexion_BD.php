<?php
function connection(){
    $conn = mysqli_connect("localhost", "root", "mamekhady", "portailugb");

if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Erreur de connexion à la base de données."]);
    exit();
}
 if(!mysqli_select_db($conn,"portailugb"))
   { die("Connexion impossible a la BD");
    exit();
}
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
    exit();
 }
 mysqli_set_charset($conn, "utf8");
 return $conn; 
}

?>