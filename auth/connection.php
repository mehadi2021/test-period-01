<?php
function connect(){
    $dbHost="Localhost";
    $user= "root";
    $pass= "";
    $dbname= "test";

    $conn= new mysqli($dbHost, $user, $pass, $dbname);
    return $conn;

}
function closeConnect($cn){
    $cn->close();
}


?>