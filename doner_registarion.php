<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
     $email=$_POST['email'];
    $dob=$_POST['dob'];
    $dod=$_POST['dod'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $pin=$_POST['pin'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $bloodgroup=$_POST['bloodgroup'];    
    $imgname=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "donerimage/$imgname");
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password!==$cpassword){
    	?><script type="text/javascript">alart('password not match');</script>
        <?php
    }
    else{
    	$query="INSERT INTO `doner`(`firstname`, `lastname`, `email`, `dob`, `date`, `gender`, `address`, `city`, `district`, `pin`, `state`, `country`, `phone`, `bloodgroup`, `image`, `password`) VALUES ('$fname','$lname','$email','$dob','$dod','$gender','$address','$city','$district','$pin','$state','$country','$phone','$bloodgroup','$imgname','$password')";
    	$run=mysqli_query($con,$query);
        if($run==true){
       ?>

         <script> location.replace("donetblood.php"); </script>
       <?php
        // header('location:admin_dashboard.php');
        // exit;
      }
    	// if($run==true){
    	// 	header('location:donetblood.php');
    	// }
    }





}
?>