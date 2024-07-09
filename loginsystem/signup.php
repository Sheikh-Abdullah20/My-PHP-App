<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbConnect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users`(`user_name`, `user_email`,`user_password`)VALUES('$name','$email','$hash')";
        $result = $con->query($sql);
        if($result){
            header("Location: ../loginPage.php");
        }
        else{
            echo "Error: ". $sql. "<br>". $con->error;
        }

    }  
    else{
        echo "Passwords do not match";
    } 
}


?>