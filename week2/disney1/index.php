<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required mata tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>Disney</title>
</head>
<body>
     
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><img src="pictures/logo.png" height="40px"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item active">
        <a class="nav-link" href="#Gallery">Gallery <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Manager</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bg text-center" style="margin-top: 66px;" >
    <img class="w-100" src="pictures/bg1.jpg">
    	<p class="bgText">WELCOME TO DISNEY!</p>
</div>

  <div class="gallery" id= "Gallery">
    <p>Gallery</p>
  </div></br>
      <?php
      //Set up SQL Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "disneydb";

      $conn = new mysqli($servername,$username,$password,$dbname);
     

      //Perform a database query
      $query = "SELECT * FROM disney";

      $result = mysqli_query($conn,$query);

     
         if (mysqli_num_rows($result)>0){
         echo "<div class='row'>";
         $count = 0;
         while ($row = mysqli_fetch_assoc($result) ){
           $count = $count + 2 ;
          echo "<div class='col-12 col-sm-6 col-lg-4'>";
          echo "<img class = 'icon' src='".$row['picture']."' alt= 'Icon'>
          <h3>".$row["name"]."</h3>
          <p class='text'>".$row["introduction"]."</p>";
          echo "</div>";
          if($count ==12){
            echo "</div><div class='row'>";
            $count = 0;
          }
   
         }
         echo "</div>";

         }


      ?>



       

 

<footer class="footer">
          <div class="footer-container">
            <div class="mdl-logo">&copy; copyright & copy JH - collect from<a href="http://www.disney.com/" title="disney" target="_blank"> Disney</a></div>
          </div>
        </footer>


<!--Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>