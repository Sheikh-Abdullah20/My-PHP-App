<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbConnect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email && $password){
        $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
        $result = $con->query($sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            while($row = mysqli_fetch_array($result)){
             if(password_verify($password, $row['user_password'])){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("Location: ../home.php");
             }else{
                echo "Incorrect Password";
             }
            }
        }else{
            echo "User not found";
        }
    }else{
        echo "Please fill out all fields";
    }
}


?>