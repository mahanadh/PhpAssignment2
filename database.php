<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/21/2018
 * Time: 9:17 AM
 */
$servername="localhost";
$username="root";
$password="";
$db="php_class";

$conn=new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else{
    echo "Connected to db successfully";
}



//$conn->close();
?>