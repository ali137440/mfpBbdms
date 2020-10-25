
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
  <body style="background-color: #75daad">
  	<?php
      include('header.php');
      ?>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content">
                         <div class="text float-left"><a href="admin_dashboard.php" class="btn btn btn-lg" role="button" ><i class="fa fa-arrow-circle-left" style="padding-right: 8px"></i>Back</a></div>
                         <div class="text float-right"><a href="admin_logout.php" class="btn btn btn-lg" role="button" ><i class="fa fa-sign-out"style="padding-right: 8px"></i>Logout</a></div>
                          
                  </div>
              </div>
              </div>
          </div>
      </div>
   


   <h2 class="text-center">BLOOD REQUESTS</h2> <br><br>

<table class="table table-striped">
    
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
       <th scope="col">Blood-Group</th>
        <th scope="col">Quantity</th>
      <th scope="col">image</th>
        <th scope="col">Status</th>
        <th scope="col">Approv</th>
    </tr>
  </thead>
  <tbody>
       <?php
include('dbcon.php');
$query="SELECT * FROM `request`";
$run=mysqli_query($con,$query);
if($run==true){
    $count=0;
    while($data=mysqli_fetch_assoc($run)){
        $count++;
     ?>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['email'];?></td>
      <td><?php echo $data['phone'];?></td>
      <td><?php echo $data['gender'];?></td>
      <td><?php echo $data['blood_group'];?></td>
      <td><?php echo $data['quantity'];?></td>
      <td><?php echo $data['image'];?></td>
        <td><?php echo $data['pending'];?></td>
        <td><form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $data['id'];?> ">
                   <button type="submit" name="approved" class="btn btn-primary">Approved</button>
        <button type="submit" name="reject" class="btn btn-primary">Reject</button></form></td>
    </tr>
   
   
      <?php   
    }
}

?>
  </tbody>
</table>









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