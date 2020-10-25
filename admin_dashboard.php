 <?php
session_start();
$user_id=$_SESSION['user_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>BloodBank</title>
  </head>
  <body  style="background-color: #75daad">
    <?php
     include('header.php');
      ?> <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content">
                    <div class="text float-left"><a href="index.php" class="btn btn btn-lg" role="button" ><i class="fa fa-home" style="padding-right: 8px"></i>HOME </a></div>
                     
                         <div class="text float-right"><a href="admin_logout.php" class="btn btn btn-lg" role="button" ><i class="fa fa-power-off"style="padding-right: 8px"></i>Logout</a></div>
                          
                  </div>
              </div>
              </div>
          </div>
      </div>
      
     
     <?php
if(isset($_SESSION['user_id'])){
    ?>
  
   <h2 class="text-center"><?php echo "WelCome "." ".$user_id;?></h2> 
<br><br>
  <?php
             include('dbcon.php');

             $id=$_SESSION['id'];
             $query="SELECT * FROM `admin_login` WHERE `id`='$id'";
             $run=mysqli_query($con,$query);
             $data=mysqli_fetch_assoc($run);
           ?>
        

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <h4 class="text-center">DASHBOARD</h4>
    <img  class="card-img-top" src="adminimage/<?php echo $data['image'];?>">
  <div class="card-body">
    <b><h6 style="font-family: Times-New-Romans"> <?php echo "Name  :".$data['firstname']." ".$data['lastname'];?><br><br>
             <?php echo "User_ID  :".$data['user_id'];?><br><br>
              <?php echo "Email_ID  :".$data['email'];?><br><br>
               
                <?php echo "Mobile No  :".$data['phone'];?><br></h6></b>
   
  </div>
</div>
   </div>

    <div class="col-md-9">
       <br><br><br><br><br>
      
      <div class="container ">
        
          <div class="row d-flex justify-content-center">

              <div class="col-md-2">
                  <div class="content">
                     <a href="add_admin.php" class="btn btn-primary btn-lg" role="button">Add Admin</a>
                            
                  </div>
              </div>&nbsp;  
               <div class="col-md-2">
                  <div class="content">
                     <a href="admin_list.php" class="btn btn-success btn-lg" role="button">Admin List</a>
                            
                  </div>
              </div>
               <!--<div class="col-md-2">
                  <div class="content">
                     <a href="change_password.php" class="btn btn-outline-danger" role="button">Change Password</a>
                            
                  </div>
              </div>-->
               <div class="col-md-2">
                  <div class="content">
                     <a href="add_doner.php" class="btn btn-warning btn-lg" role="button" >Add Donor</a>
                            
                  </div>
              </div>
               <div class="col-md-2">
                  <div class="content">
                     <a href="doner_list.php" class="btn btn-danger btn-lg" role="button">Donor List</a>
                            
                  </div>
              </div>
               <div class="col-md-2">
                  <div class="content">
                     <a href="stockbloadlist.php" class="btn btn-info btn-lg" role="button">Stock BloodList</a>
                            
                  </div>
              </div>


              </div>

          </div>
      <br><br><br>
      <div class="container">
        <div class="row  d-flex justify-content-center">
              <div class="col-md-3">
                  <div class="content">
                     <a href="outstocklist.php" class="btn btn-danger btn-lg" role="button">OutStock BloodList</a>
                            
                  </div>
              </div>&nbsp;  
              <div class="col-md-3">
                  <div class="content">
                     <a href="exchangelist.php" class="btn btn-success btn-lg" role="button">Exchange BloodList</a>
                            
                  </div>
              </div>&nbsp;  
               <div class="col-md-3">
                  <div class="content">
                     <a href="exchangebloadlist.php" class="btn btn-warning btn-lg" role="button" >Exchange Blood</a>
                            
                  </div>
              </div>
             
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-md-2">
                  <div class="content">
                     <a href="bloadcamp.php" class="btn btn-primary btn-lg" role="button">Blood Camp</a>
                            
                  </div>
              </div>
              &nbsp;  &nbsp;   
                   <div class="col-md-2">
                  <div class="content">
                     <a href="addnotice.php" class="btn btn-success btn-lg" role="button" >Add Notice</a>
                            
                  </div>
              </div>&nbsp;   
               <div class="col-md-2">
                  <div class="content">
                     <a href="bloodrequest.php" class="btn btn-danger btn-lg " role="button">Blood Request</a>
                            
                  </div>
              </div>
            </div>
          </div>
               <!--<div class="col-md-2">
                  <div class="content">
                     <a href="#" class="btn btn-outline-warning " role="button">Add</a>
                            
                  </div>
              </div>
               -->

              </div>
          </div>
        </div>
      </div>
</div>
 <br><br><br><br>

      
      
      
      
      
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