

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
                <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                
              </div>
            </div>
          </nav>

          <div class="jumbotron" id="home">
              <div class="container">
                  <h1>Explore our Books Collection</h1>
                  <!-- <h2>Explore Tons of Varieties of Books </h2>
                  <p><a href="display.php" class="btn">Explore Now</a></p> -->
              </div>

              

          
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php



require('login.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  

  function myfunction1($bookid){

      $_SESSION['bookid']=$bookid;
  
  
  }

  require('mysqli_connect.php');

$selectQuery = "SELECT * FROM BookInventory";
$runQuery = @mysqli_query($dbc, $selectQuery); 

$num = mysqli_num_rows($runQuery); 

if ($num > 0) { 

  session_start();


	while ($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
	
        
		  
		?>
    
            
          <div class="card">
  <img class="card-img-top" alt="Card image cap" src="images/<?php echo $row['image']; ?>" >
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']?></h5>
    <p class="card-text"><?php echo $row['description']?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Author:</b> <?php echo $row['author']?></li>
    <li class="list-group-item"><b>Price:</b> <?php echo $row['price']?></li>
    <li class="list-group-item"><b>Quantity:</b> <?php echo $row['Quantity']?> in Stock</li>
  </ul>
  <div class="card-body">
    <a href="form.php" class="btn">CHECKOUT</a>

  </div>
    </div>

    

    
   
        
	<?php } 

	// mysqli_free_result ($runQuery); 

} else { 

	echo "No records found.";

}

mysqli_close($dbc); 
}
if(isset($_GET['id']))
{
    $id =  $_GET['id'];
    echo $_GET['id'];
    myfunction($id);
}

function myfunction($id){
    session_start();
    echo $id;
    $_SESSION['bookid'] = $id;
    echo $_SESSION['bookid'];
    header('Location:form.php');

}
?>
</div>
<div class="footer">
        <div class="container">
          <p><b>&copy; 2022 Hrithik's BookStore</b></p>
        </div>
        </div>
