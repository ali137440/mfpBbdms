<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $givegroup=$_POST['donetblood'];
    $needgroup=$_POST['needblood'];
    $imgname=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "exchangeimage/$imgname");
     $query="INSERT INTO `exchanger`(`name`, `email`, `phone`, `gender`, `give_blood`, `need_blood`, `file`) VALUES ('$name','$email','$phone','$gender','$givegroup','$needgroup','$imgname')";
      $run=mysqli_query($con,$query);
       if($run==true){
       ?>

         <script> location.replace("admin_dashboard.php"); </script>
       <?php
        // header('location:admin_dashboard.php');
        // exit;
      }

     // if($run==true){
     //  header('location:admin_dashboard.php');
     // }

    





}
?>