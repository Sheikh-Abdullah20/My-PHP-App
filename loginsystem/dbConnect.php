<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'userform';


$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die('could not connect to DB Due to :' . mysqli_connect_error());
}
?>