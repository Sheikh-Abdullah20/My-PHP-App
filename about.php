
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <title>Website - About</title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

include "navbar.php";
        
// Content will be Upload Here
echo '<main>  </main>';

       
include "footer.php"; 
        

    
}else{
    header("Location: loginPage.php");
}
    ?>
   
</body>
</html>