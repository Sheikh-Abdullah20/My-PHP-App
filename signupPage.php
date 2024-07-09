<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include 'navbar.php';
    ?>
    <main>
    <div class="container main-container my-5 py-3">
        <div class="row text-center my-3">
            <div class="col-md-12 ">
                <h1 class="display-4">SignUp</h1>
            </div>
        </div>

        <div class="row mb-4 my-4">

        <div class="col-md-6 d-flex justify-content-center ">
        <form class='w-75' method ='POST' action='loginsystem/signup.php'>

        <div class="mb-3">
                <label for="name" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name='name' aria-describedby="username">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control"  name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name='cpassword' id="exampleInputPassword1">
            </div>

            <div class="row py-3">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-warning bg-dark w-50">Submit</button>

                </div>
            </div>
        </form>
            </div>

            <div class="col-md-6 d-flex justify-content-center ">
                <div class="img-box">
                <img src="images/person.png" alt="" class='img-fluid'>
                </div>
            </div>
            
        </div>
    </div>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>