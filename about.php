
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* styles.css */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

#wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar-wrapper {
    min-height: 100vh;
    width: 250px;
    margin-left: -250px;
    transition: margin 0.25s ease-out;
}

#wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
}

#page-content-wrapper {
    width: 100%;
}

.sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
}

.list-group-item {
    padding: 0.75rem 1.25rem;
}
#menu-toggle{
    width: 20px;
    cursor:pointer;
    fill: white;
    margin-left: 1rem;
}

    </style>
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