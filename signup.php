<?php

include "db.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(fullname,email,age,gender,username,password,phone)
VALUES('$fullname','$email','$age','$gender','$username','$hashed_password','$phone')";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo mysqli_error($conn);
}

?>