<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      #profile_picture {
        width:200px;
      }


    </style>
    
  </head>
  <body>
    <div class="container">
      <?php
          require "navbar.php";
      ?>
      <div class="row">
        <div class="col-md-8">
          <div class="jumbotron">
            <div class="display-4">Personal Information</div>
            <hr class="my-4" />
            <table>
              <tr>
                <td rowspan=10>
                  <img src="img/profile_picture.png" id="profile_picture" />
                </td>
                <td>
                  Fullname
                </td>
              </tr>
              <tr>
                <td>
                  Wilbert Raymund R. Rayos
                </td>
              </tr>
              <tr>
                <td>
                  Permanent Address
                </td>
              </tr>
              <tr>
                <td>
                  Block 25 Lot 50 Verde Heights Gaya-Gaya San Jose del Monte Bulacan 3023
                </td>
              </tr>
              <tr>
                <td>
                  Civil Status
                </td>
              </tr>
              <tr>
                <td>
                  Single
                </td>
              </tr>
              <tr>
                <td>
                  Date of Birth
                </td>
              </tr>
              <tr>
                <td>
                  March 22, 1997
                </td>
              </tr>
              <tr>
                <td>
                  Nationality
                </td>
              </tr>
              <tr>
                <td>
                  Filipino
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="jumbotron">
            
              <table>
                <tr>
                  <td>Email</td>
                  <td>wilbertraymundrayos@gmail.com</td>
                </tr>
              </table>
  
          </div>
        </div>
      </div>
      
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="workExperience">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Work Experience
              </button>
            </h5>
          </div>

          <!-- Work Experience -->
          <div id="collapseOne" class="collapse show" aria-labelledby="workExperience" data-parent="#accordion">
            <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Hire Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="img/logo/ntc_logo_small.png" class="img-thumbnail thumbPics"></th>
                    <td>National Telecommunications Commission</td>
                    <td>Job Order</td>
                    <td>February 2021 - December 2021</td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="img/logo/sjdm_logo_small.png" class="img-thumbnail thumbPics"></th>
                    <td>LGU of San Jose del Monte Bulacan</td>
                    <td>Intern</td>
                    <td>February 2021 - December 2021</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Education -->
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