<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>admin Dashboard</title>
  </head>
  <body>
  	<?php
      include('header.php');
      ?>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content">
                         <div class="text float-left"><a href="admin_dashboard.php" class="btn btn-primary" role="button" >Back</a></div>
                         <div class="text float-right"><a href="admin_logout.php" class="btn btn-primary" role="button" >Logout</a></div>
                          
                  </div>
              </div>
              </div>
          </div>
      </div>
      <?php
session_start();
$user_id=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])){
    ?>
  
   <h2 class="text-center">CHANGE YOUR PASSWORD HERE</h2> <?php
}
else
    {
        header('location:admin.php');
    }


?><br><br>














<br><br><br>






<?php
      include('footer.php');
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>