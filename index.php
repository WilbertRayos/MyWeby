<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      #profile_picture {
        display: block;
        max-width: 80%;
        margin: auto;
        background-color: blue;
      }
      
    </style>

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Container -->
    <div class="container" style="background-color:antiquewhite">
        <!-- Nav bar --->
        <?php require "navbar.php"; ?>

        <!-- Main body -->
        <!-- First Row -->
        <div class="row mt-md-3">
          <!-- Profile Picture Column -->
          <div class="col-md-4 order-md-12">
            <img src="img/profile_picture.png" id="profile_picture"/>
          </div>
          <!-- Welcome Column -->
          <div class="col-md-8 order-md-1" >
            <div class="jumbotron">
              <div class="display-4">Welcome to my website</div>
              <hr class="my-4" />
              <p class="lead">
                I am Wilbert Raymund R. Rayos, the owner of this website.
              </p>
            </div>
          </div>
        </div>

    </div>
    <div class="container-fluid">
    <?php require "footer.php"; ?>
    </div>
      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>