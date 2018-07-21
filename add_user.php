<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/21/2018
 * Time: 9:18 AM
 */
include_once 'database.php';

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$DOB= $_POST['DOB'];
$email= $_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];
print_r($_POST);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);

$stmt =$conn->prepare(
    " insert into user (firstname, lastname, DOB, email , username , password ) VALUES ( ? , ? , ? , ? , ? , ?) "
);

$stmt->bind_param(
    "sssssd",$firstname, $lastname, $DOB, $email, $username ,$password );

echo "here";

$stmt->execute();
$stmt->close();
$conn->close();
?>
