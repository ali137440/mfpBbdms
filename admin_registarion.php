<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $user_id=$_POST['user_id'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $imgname=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "adminimage/$imgname");
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password!==$cpassword){
    	?><script type="text/javascript">alart('password not match');</script><?php
    }
    else{
    	$query="INSERT INTO `admin_login`(`firstname`, `lastname`, `user_id`, `email`, `phone`, `gender`, `password`, `image`) VALUES ('$fname','$lname','$user_id','$email','$phone','$gender','$password','$imgname')";
    	$run=mysqli_query($con,$query);
       if($run==true){
       ?>

         <script> location.replace("admin_dashboard.php"); </script>
       <?php
        // header('location:admin_dashboard.php');
        // exit;
      }
    	// if($run==true){
    	// 	header('location:admin_dashboard.php');
    	// }
    }





}
?>
<?php
/*
include('dbcon.php');
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
    $user_id=$_POST['user_id'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $imgname=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "adminimage/$imgname");
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

   if($fname!=""){
    if(preg_match("/^[a-zA-Z ]*$/",$fname)){
      if($lname!=""){
          if(preg_match("/^[a-zA-Z ]*$/",$lname)){
            if($user_id!=""){
               if (preg_match("/^[a-zA-Z ][0-9]*$/",$user_id)) {
                if($email!=""){
                    if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/", $email)) {

                      if($phone!=""){
                                    if (preg_match("/^[6-9][0-9]{9}$/", $phone)) {
                                     if($gender!=""){
                                      if($password!=""){
                                        if($cpassword!=""){
                                          if($password==$cpassword){

                                                        $query="INSERT INTO `admin_login`(`firstname`, `lastname`, `user_id`, `email`, `phone`, `gender`, `password`, `image`) VALUES ('$fname','$lname','$user_id','$email','$phone','$gender','$password','$imgname')";
                                                            $run=mysqli_query($con,$query);
                                                          if($run==true){
                                                            ?><script type="text/javascript">alert('Data insert Successfull');</script><?php
                                                          }
                                                          else{
                                                             ?><script type="text/javascript">alert('Data is not inserted');</script><?php
                                                          }
                                          }
                                          else{
                                            $error_msg['password']="password not match ";
                                          }

                                        }else{
                                          $error_msg['cpassword']="confrompassword is required ";
                                        }

                                      }else{
                                        $error_msg['password']="password is required  ";
                                      }

                                     }
                                     else{
                                      $error_msg['gender']="gender  is required  ";
                                     }



                                    }
                                    else{
                                       $error_msg['phone']="phone number is required and Invalid ";

                                    }
                                  }else{
                                     $error_msg['phone']="phone number is required ";

                                  }

                    }else{
                            $error_msg['email']="Email is required  and Invalid";
                    }
                  }
                  else{
                   $error_msg['email']="Email is required";
                  }


               }
               else{
                 $error_msg['user_id']="UserId is  Contain only charecter and number ";

               }
             }else{
                  $error_msg['user_id']="UserId is required ";
             }
           
          }
          else{
              $error_msg['lname']="Last Name Contain only charecter";
             }
           }
          else{
              $error_msg['lname']="Last Name Required";
             }
           }
           else{
                    $error_msg['fname']="First Name Contain only charecter";
                  }
            
   }
   else{
          $error_msg['fname']="First Name Required";
   }
 }
     

}*/

?>










  <?php if(isset($error_msg['fname'])){
      echo $error_msg['fname'];?>
<?php if(isset($error_msg['lname'])){
      echo $error_msg['lname'];?>
 <?php if(isset($error_msg['user_id'])){
      echo $error_msg['user_id'];?>
<?php if(isset($error_msg['email'])){
      echo $error_msg['email'];?>
<?php if(isset($error_msg['phone'])){
      echo $error_msg['phone'];?>
       <?php if(isset($error_msg['gender'])){
      echo $error_msg['gender'];?>
 <?php if(isset($error_msg['password'])){
      echo $error_msg['password'];?>
 <?php if(isset($error_msg['cpassword'])){
      echo $error_msg['cpassword'];?>