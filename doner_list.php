
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

   <h2 class="text-center">DONORS LIST</h2><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Date of Last Donet</th>
       <th scope="col">Gender</th>
        <th scope="col">Phone no</th>
         <th scope="col">Address</th>
         <th scope="col">City</th>
         <th scope="col">District</th>
         <th scope="col">Pincode</th>
         <th scope="col">State</th>
         <th scope="col">Country</th>
         <th scope="col">Blood Group</th>
          <th scope="col">Upload Picture</th>
          <th scope="col">Password</th>
          <th scope="col">Delete</th>
          
    </tr>
    
  </thead>
<?php
include('dbcon.php');
$query="SELECT * FROM `doner`";
$run=mysqli_query($con,$query);
if($run==true){
	$count=0;
	while($data=mysqli_fetch_assoc($run)){
		$count++;?> 
		<tbody>
    <tr>
      <td><?php echo $count;?></td>
      <td><?php echo $data['firstname'];?></td>
      <td><?php echo $data['lastname'];?></td>
      
       <td><?php echo $data['email'];?></td>
       <td><?php echo $data['dob'];?></td>
         <td><?php echo $data['date'];?></td>
       <td><?php echo $data['gender'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo $data['address'];?></td>
        <td><?php echo $data['city'];?></td>
        <td><?php echo $data['district'];?></td>
        <td><?php echo $data['pin'];?></td>
        <td><?php echo $data['state'];?></td>
        <td><?php echo $data['country'];?></td>
        <td><?php echo $data['bloodgroup'];?></td>
        <td ><img src="donerimage/<?php echo $data['image'];?>" style="max-width: 70px;"></td>
         
          <td><?php echo $data['password'];?></td>
          <td> <a href="Deletedonor.php?id=<?php echo $data['id'];?>" ><button type="button" class="btn btn-danger" style="font-size: 25px"><i class="fa fa-trash"></i></button></td>
           
    </tr>
    </tbody><?php

	}
}
?>

 
</table>
</div>
</div>
</div>














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