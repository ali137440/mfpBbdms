<?php
session_start();
include('dbcon.php');
if(isset($_POST['submit'])){
    

    $user_id=$_POST['user_id'];
     $password=$_POST['password'];
    $query="SELECT * FROM `admin_login` WHERE `user_id`='$user_id' AND `password`='$password'";
    $run=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($run);
     $_SESSION['id']=$data['id'];
    if($data){

        $_SESSION['user_id']=$user_id;
        header('location:admin_dashboard.php');
    
    }
    else{
         
            header('location:admin.php');
      
    }
                
    
}
?>