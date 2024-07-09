
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){



echo   ' <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Activity Center</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
                <a href="loginsystem/logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">';
            
             include "navbar.php";
            
           echo '<br>
        <svg id="menu-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        <main>
            <div class="container bg-light text-dark mb-4">
                <div class="row">
                    <h1 class="display-1 text-center">
                        Lorem ipsum
                    </h1>
                </div>
                <div class="row">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reiciendis eveniet aliquam? Aspernatur reprehenderit nulla, voluptatum voluptatibus ipsa autem, adipisci cum dolore quas nam, dolores accusamus repellendus? Asperiores doloribus repellat sequi totam libero similique rem perspiciatis eos in ex eligendi, fugiat non odio esse tempora delectus. Consectetur et deleniti blanditiis qui laudantium excepturi autem aliquam dolores reiciendis. Perferendis, iure veritatis quibusdam ea esse maiores dicta nisi dolorem numquam tempora, quod, animi quae magnam qui non voluptas ullam asperiores optio earum aliquid? Omnis ut exercitationem provident eius quod voluptatibus id voluptatem dolorem? Asperiores animi a fuga mollitia, ratione corporis id explicabo soluta incidunt aspernatur aperiam ipsam officia harum pariatur beatae facilis porro inventore earum laborum, voluptas quas minus consectetur suscipit quos! Dicta ea laudantium debitis doloribus dolor modi nemo aliquam eligendi sequi quasi dignissimos, exercitationem numquam porro dolorum molestias veniam iure commodi consequatur id totam facere! Id sequi et libero fugit deserunt. Libero nemo ex excepturi recusandae cum architecto aspernatur, modi, ullam similique eaque iste aliquid? Unde doloremque voluptates reprehenderit ratione repellendus quo labore alias repellat ad rerum temporibus similique ea necessitatibus assumenda aliquid debitis aperiam officiis adipisci possimus, quas veniam eum voluptas. Animi explicabo harum aspernatur debitis ipsa quibusdam quaerat quidem unde nesciunt dolore dolorum iusto est repudiandae ad alias, incidunt natus omnis optio, repellat sed laborum! Maiores ea similique ratione? Optio officia, praesentium ea libero labore rem similique exercitationem fugit veniam expedita quidem. Voluptatibus corporis nesciunt obcaecati voluptate harum tenetur dicta quos ratione dignissimos veritatis mollitia alias quam sit laborum maxime iure repudiandae voluptates, sed eius odio accusantium? Non, at? Dolorem laudantium optio dolore assumenda quod et quam beatae temporibus suscipit, voluptatibus, magnam ad asperiores ut accusantium architecto in dolor. Hic laborum vitae nam non minus? Numquam, a non ad consequatur sed impedit vitae dolorem doloremque? Iure magni, ipsum omnis consectetur necessitatibus aperiam corrupti officiis fugiat natus reiciendis nemo. Tenetur libero facere inventore ad suscipit? Dolore, dicta minima. Impedit, mollitia. Quia ad iste voluptates praesentium molestiae commodi vel beatae, eum unde ipsum inventore reiciendis illum assumenda vero, nobis quod maiores laborum quo. Ea asperiores maiores error dolores accusantium omnis ratione, aliquam debitis exercitationem explicabo placeat fugiat, voluptas atque corporis eum ullam laboriosam impedit commodi molestiae eveniet unde ipsam itaque sed? Et rerum incidunt a id maiores, perferendis, in, quos tempore aliquid temporibus non animi nostrum excepturi doloremque exercitationem. Modi ea quibusdam enim expedita nam error laudantium porro asperiores doloribus atque dolor autem alias, non ut culpa repellat tempore blanditiis adipisci! Aliquid sit iusto consequatur modi quos, quis rerum hic ad nisi ipsa ex officia sint nam, exercitationem doloribus id odio soluta beatae earum similique reiciendis. Sunt nulla perferendis, consequatur quas expedita ratione maxime fugiat in autem ea unde suscipit? Hic repellat explicabo earum a, officia soluta aut? Expedita repellendus hic nulla iste quo? Vitae provident in dolorum, cumque ratione eos ducimus tempora nulla tempore, placeat cupiditate est quasi facere! Voluptas dolore, iste culpa expedita iure laboriosam consectetur quo, debitis nostrum fuga alias quaerat magnam? Deserunt totam aliquid a nostrum!</p>
                </div>
            </div>';
     

   echo'</div>
    </main>
         </div>';
      
       
        include "footer.php"; 
        
        
      

    
}else{
    header("Location: loginPage.php");
}
    ?>
   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</html>