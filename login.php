<?php
session_start();
include "db.php";

$user = $_POST['loginuser'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$user' OR username='$user'";   

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass, $row['password'])){

        $_SESSION['user'] = $row['username'];

        echo "Login Successful";

    }
    else{

        echo "Invalid Username or Password";

    }

}
else{

    echo "Invalid Username or Password";

}
?>