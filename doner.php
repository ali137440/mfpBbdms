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
  <body style="background-color: #75daad;">
    <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content">
                      <div style="width:100%;">
                         <!--
                         <img src="" class="rounded float-right" alt="..."> -->
                         <div class="text-right" style="background-color:#FA744F;color:white;">
                         <a href="admin.php" style="text-decoration: none;color: white;padding-right: 20px"><i class="fa fa-facebook"style="padding-right: 10px;"></i>
                         <i class="fa fa-instagram"style="padding-right: 15px;"></i><i class="fa fa-twitter" style="padding-right: 15px;"></i><i class="fa fa-user"style="padding-right: 3px;"></i>ADMIN</a>
                         <img src="images/bl1.png" class="rounded float-left" alt="..." style="max-height: 100px;max-width: 130px;padding-left: 20px;">
                         <div class="text-center" style="background-color:#FA744F;color:white;">
                          <h1 style="padding-bottom: 30px;font-family: Times-New-Roman">Blood Bank & Donor Management System</h1>
                          </div>
                        </div>
                             
                     </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
       <div class="container">
        <div class="row">
          <div class="col-md-3">
          <div class="card" style="background-color: ">
            <div class="card-body">
               <div  class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link "  href="index.php" style="text-decoration: none;color: whilte"><i class="fa fa-home" style="padding-right: 8px"></i>HOME</a>
  <a class="nav-link "  href="about.php"  style="text-decoration: none;color: whilte" ><i class="fa fa-address-card" style="padding-right: 8px"></i>ABOUT</a>
  <!--<a  class="nav-link "  href="search.php"  style="text-decoration: none;color: whilte"><i class="fa fa-search"  style="padding-right: 8px"></i>SEARCH</a>-->
  <a  class="nav-link active"  href="doner.php"  style="text-decoration: none;color: whilte"><i class="fa fa-user" style="padding-right: 8px"></i>DONORS</a>
  <a  class="nav-link "  href="bloodstock.php"  style="text-decoration: none;color: whilte"><i class="fa fa-tint" style="padding-right: 8px"></i>BLOOD STOCK</a>
   <a class="nav-link "  href="donetblood.php"  style="text-decoration: none;color: whilte"><i class="fa fa-users" style="padding-right: 8px"></i>REGISTRATION</a>
   
    <a class="nav-link " href="sendreq.php"  style="text-decoration: none;color: whilte"> <i class="fa fa-reply" style="padding-right: 8px"></i>BLOOD REQUEST</a>
  <a class="nav-link  " href="camp.php"  style="text-decoration: none;color: whilte"><i class="fa fa-home" style="padding-right: 8px"></i>CAMPS</a>
  <a class="nav-link " href="notice.php"  style="text-decoration: none;color: whilte"><i class="fa fa-bell" style="padding-right: 8px"></i>NOTICE</a>  
  <a class="nav-link "  href="contact.php"  style="text-decoration: none;color: whilte"><i class="fa fa-phone-square" style="padding-right: 8px"></i>CONTACT</a>
</div>
            	<!-- <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="index.php">HOME</a>
  <a class="list-group-item list-group-item-action" href="about.php">ABOUT</a>
  <a class="list-group-item list-group-item-action" href="search.php">SEARCH</a>
  <a class="list-group-item list-group-item-action" href="doner.php">DONERS</a>
  <a class="list-group-item list-group-item-action" href="bloodstock.php">BLOOD STOCK</a>
   <a class="list-group-item list-group-item-action" href="donetblood.php">DONET BLOOD</a>
    
    <a class="list-group-item list-group-item-action" href="sendreq.php">SEND REQUEST</a>
  <a class="list-group-item list-group-item-action" href="camp.php">CAMPS</a>
  <a class="list-group-item list-group-item-action" href="notice.php">NOTICE</a>  
  <a class="list-group-item list-group-item-action" href="contact.php">CONTACT</a>
</div>-->

</div></div></div>

<div class="col-md-9" style="background-color: white;border-radius: 5px;">
  <div class="content">
  	<h1>Donor List</h1><br><br>

  <?php
include('dbcon.php');
if(isset($_POST['submit'])){
  $address=$_POST['address'];
  $blood=$_POST['blood'];
  $query="SELECT * FROM `doner` WHERE `address`='$address' OR `bloodgroup`='$blood'";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)<1){
  ?><script type="text/javascript">alert('No Record are Found');</script><?php
  echo "No Record Are Found";
}

}
else

$query="SELECT * FROM `doner`";

$run=mysqli_query($con,$query);?>
    
  





     <br>
      <form action="" method="post" enctype="multipart/form-data">
          
  <div class="form-row align-items-center">
    <div class="col-auto">
     
      <input type="text" name="address" class="form-control mb-2" id="inlineFormInput" placeholder="Search by Address">
    </div>
    <div class="col-auto">
      
      <div class="input-group mb-2">
       
        <input type="text" name="blood" class="form-control" id="inlineFormInputGroup" placeholder="Search by Blood-Group">
      </div>
    </div>
   
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button>
    </div>
  </div>

               


  
</form>
  	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
       <th scope="col">Date</th>
      <!--<th scope="col">Date of Birth</th>-->
       <th scope="col">Gender</th>
        <th scope="col">Phone no</th>
         <!--<th scope="col">Address</th>
         <th scope="col">City</th>
         <th scope="col">District</th>
         <th scope="col">Pincode</th>
         <th scope="col">State</th>
         <th scope="col">Country</th>-->
         <th scope="col">Blood Group</th>
          <th scope="col">Upload Picture</th>
          <!--<th scope="col">Password</th>
          <th scope="col">Edit/Delete</th>-->
          
    </tr>
    
  </thead>

		<tbody>
      <?php
if($run==true){
  $count=0;
  while($data=mysqli_fetch_assoc($run)){
    $count++; ?>

    <tr>
      <td><?php echo $count;?></td>
      <td><?php echo $data['firstname'];?></td>
      <td><?php echo $data['lastname'];?></td>
      
       <td><?php echo $data['address'];?></td>
      <!--<td><?php echo $data['dob'];?></td>-->
             <td><?php echo $data['date'];?></td>
       <td><?php echo $data['gender'];?></td>
        <td><?php echo $data['phone'];?></td>
       <!-- <td><?php echo $data['address'];?></td>
        <td><?php echo $data['city'];?></td>
        <td><?php echo $data['district'];?></td>
        <td><?php echo $data['pin'];?></td>
        <td><?php echo $data['state'];?></td>
        <td><?php echo $data['country'];?></td>-->
        <td><?php echo $data['bloodgroup'];?></td>
        <td ><img src="donerimage/<?php echo $data['image'];?>" style="max-width: 70px;"></td>
         
          <!--<td><?php //echo $data['password'];?></td>
          <td><a href="#">Edit/delete</td>-->
           
    </tr>
    </tbody>
    <?php

	}
}
?>

 
</table>
</div>
</div>
</div>
  	<!--<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h4 id="list-item-1">hello</h4>
  <p></p>
  <h4 id="list-item-2">hiii</h4>
  <p></p>
  <h4 id="list-item-3">he</h4>
  <p></p>
  <h4 id="list-item-4">hppp</h4>
  <p></p>
  <h4 id="list-item-4">hjkhkj</h4>
  <p></p>
  <h4 id="list-item-4">jhgfjhf</h4>
  <p></p>
  <h4 id="list-item-4">khgjf</h4>
  <p></p>
  <h4 id="list-item-4">hjfdfdgf</h4>
  <p></p>
</div>--></div>
    <!--<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">welcome</div>
  <div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">hello</div>
  <div class="tab-pane fade" id="v-pills-doner" role="tabpanel" aria-labelledby="v-pills-doner-tab">hii</div>
  <div class="tab-pane fade" id="v-pills-blodstock" role="tabpanel" aria-labelledby="v-pills-blodstock-tab">haider</div>
  <div class="tab-pane fade" id="v-pills-exchange" role="tabpanel" aria-labelledby="v-pills-exchange-tab">raja</div>
  <div class="tab-pane fade" id="v-pills-camp" role="tabpanel" aria-labelledby="v-pills-camp-tab">haooo</div>
  <div class="tab-pane fade" id="v-pills-notice" role="tabpanel" aria-labelledby="v-pills-notice-tab">brabe</div>
  <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">soldier</div>
</div>-->
  </div>
</div>
  
</div><br><br><br>
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