<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
        <?php
            require "navbar.php";
        ?>
      <!-- Body -->
      <!-- Download Tabs -->
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseResume" role="button" aria-expanded="false" aria-controls="multiCollapseResume">My Resume</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapsePDS" aria-expanded="false" aria-controls="multiCollapsePDS">My Personal Data Sheet</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseAll" aria-expanded="false" aria-controls="multiCollapseAll">All</button>
      </p>
      <div class="row" style="background-color: greenyellow;">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseResume">
            <div class="card card-body" style="background-color: greenyellow;">
              <h3>Resume</h3>
              <p>You can download a copy of my resume by clicking the download botton below</p>
              <button type="button" class="btn btn-primary btn-sm">Download</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapsePDS">
            <div class="card card-body">
              <h3>Personal Data Sheet</h3>
              <p>You can download a copy of my Personal Data Sheet by clicking the download botton below</p>
              <button type="button" class="btn btn-primary btn-sm">Download</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseAll">
            <div class="card card-body">
              <h3>All</h3>
              <p>Download my Resume, Personal Data Sheet (PDS), including all of my certificates</p>
              <button type="button" class="btn btn-primary btn-sm">Download</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Certificates -->
     
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <img src="img/certificates/Cert_1.jpg" />
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary btn-sm">Download</button>
            </div>
          </div>
        </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Collapsible Group Item #2
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>






  </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>