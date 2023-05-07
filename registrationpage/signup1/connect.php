<?php
$SERVERNAME = 'localhost';
$USERNAME = "root";
$PASSWORD = " ";
$DATABASE = 'signupform';


$con = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die(mysqli_error($mysqlicon));
}


?>