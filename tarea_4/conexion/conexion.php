<?php
$url = "localhost";
$user = "root";
$pwd = "";
$bdd = "andersson";

$con = mysqli_connect($url, $user, $pwd, $bdd);

if($con == true){
    echo "CONEXION EXITOSA\t", date('d/m/y/h');

}else{
    echo "ERROR EN LA CONEXION";
}
 mysqli_close($con);
?>  