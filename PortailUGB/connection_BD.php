<?php
function OuvrirBD(){
// connexion a mysql
$con = mysqli_connect("localhost:81","root",'mamekhady');
if (!$con){
print("connexion impossible a mysql"); exit;}
// selection de la BD restau
if (!mysqli_select_db($con ,"restau")){
print("connexion impossible a la BD"); exit;}
return $con;
}
?>