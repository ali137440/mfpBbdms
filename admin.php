<?php
session_start();
if(isset($_SESSION['user_id'])){
    echo"you are already login";
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BloodBank</title>
  </head>
  <body style="background-color: #75daad">
    <?php
      include('header.php');
      ?>
      
      
      
      <div class="container-center">
            <div class="row d-flex justify-content-center">
              <div class="col-md-3">
                <div class="text-center">
  <img src="images/admin.png" class="rounded" alt="..."  width="130" height="130">
</div>
                
                  
 <form action="admin_login.php" method="post" enctype="multipart/form-data">
 
 <div style="text-align: center"> <h4 >ADMINISTRATOR</h4>
  <p>Please Sign in to get Access </p>
                    </div>
    
    <input type="text" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User id / Email id *"required="required">
    
 
    
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password *"required="required"><br>
  
  <div class="checkbox mb-3" style="text-align: center">
        <label>
          <input type="checkbox" value="remember-me" required="required"> Remember me
        </label>
      </div>
  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
          <?php
         include('dbcon.php');
          $query="SELECT * FROM `admin_login`";
          $run=mysqli_query($con,$query);
          if($run==true){
              $data=mysqli_fetch_assoc($run);
                  ?>
          <input type="hidden" name="id" value="<?php echo $data['id'];?>"> <?php
              
          }
          ?>

  
      <button type="submit"  name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
         </div>
      </div>
     </div>
  
</form>
                       
   
                  
              </div>
       </div>
    </div>
      <br><br><br>
    
      
      
      
       <?php
      if(isset($_SESSION['user_id'])){
          $_SESSION['user_id']=$_POST['user_id'];
      }
      
      include('footer.php');
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>