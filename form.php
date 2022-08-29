<?php

require('mysqli_connect.php');

$selectQuery = "SELECT * FROM BookInventory";
$runQuery = @mysqli_query($dbc, $selectQuery); 

$num = mysqli_num_rows($runQuery); 

if ($num > 0) { 


	while ($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {

    // echo"<h2>".$row['price']."</h2>";

  } 

	mysqli_free_result ($runQuery); 

} else { 

	echo "No records found.";

}

mysqli_close($dbc); 



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Hrithik's BookStore</title>
  </head>
  <body>
    <video autoplay loop muted id="bgvideo">
        <source src="images/myvid.mp4" type="video/mp4">
    </video>

          <!--Create navigation bar with scrollspy-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">Hrithik's BookStore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                
            </div>
          </nav>

          <div class="jumbotron" id="home">
              <div class="container">
                  <h1>Add your Details Below:</h1>

                  <form action="thanks.html" method="post">
                    <div class="form-row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        </div>
                        <div class="form-group">
                            <br><br>
                            <input type="text" class="form-control" id="email" placeholder="Email-Address"><br><br>
                            <input type="text" class="form-control" id="quantity" placeholder="Quantity"><br><br>
    
                          <input type="text" class="form-control" id="inputAddress" placeholder="Address"><br><br>

                        <div class="form-row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="State">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="ZipCode">
                        </div>
                        </div><br><br>

                        <h4>Add Payment Details:</h4><br>

                        <div class="form-row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Name on Card">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Card Number">
                        </div>
                        </div><br><br>

                        <div class="form-row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="CVV">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Expiration">
                        </div>
                        </div><br><br>
      

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        

                </form>
                  
              </div>

          </div>
</div>
          <div class="footer">
        <div class="container">
          <p><b>&copy; 2022 Hrithik's BookStore</b></p>
        </div>
        </div>

          
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>