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
      <?php

if(isset($_SESSION['user_id'])){

    ?>
    

   <h2 class="text-center">ADD MEMBERS</h2> <?php
}
else
    {
        header('location:admin.php');
    }

?>
 <br><br>
 <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form action="add_admin.php" method="post"  id="qual" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your First Name" required="required" value="<?php echo  @$_POST['fname'];?>">
 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name" required="required" value="<?php echo @$_POST['lname'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User Id<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your user_id" required="required" value="<?php echo @$_POST['user_id'];?>">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address"   required="required" value="<?php echo @$_POST['email'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="phone" id="text1" aria-describedby="emailHelp" placeholder="Enter your phone no"  required="required" value="<?php echo @$_POST['phone'];?>">
   
  </div>
  <label for="exampleInputEmail1">Gender<span style="color :red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required="required" value="<?php echo @$_POST['phone'];?>">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" value="<?php echo @$_POST['phone'];?>">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Transgender" value="<?php echo @$_POST['phone'];?>">
  <label class="form-check-label" for="inlineRadio3">Transgender</label>
  
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password<span style="color :red;">*</span></label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required="required" value="<?php echo @$_POST['password'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password<span style="color :red;">*</span></label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Re-Enter Password" required="required" value="<?php echo @$_POST['cpassword'];?>">
  
  </div>
  <div class="form-group">
        <label class="col-md-6 control-label" for="act">Upload Your Document</label>
        <div class="col-md-8">
            <input required type="file" name="image" id="cv" class="btn btn-default"/>
            <span class="help-block" style="color: red"><br>NOTE: File size must be less than 2MB. <br/> Only Allowed file types are png, jpeg, jpg, pdf, doc, docx, txt</span>
        </div>
    </div>
  

  


  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button  type="submit"  id="btn2"  name="submit" class="btn btn-primary">Register</button>
         </div>
      </div>
     </div>
  
</form>
        </div>
      </div>
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
    <!-- for file vaklidation size with extantion-->
    <script>
      $("#qual").submit( function(submitEvent) {
    var fileSize = document.getElementById("cv").files[0];
    var sizeInMb = (fileSize.size/1024)/1024;
    var sizeLimit= 2;
    if (sizeInMb > sizeLimit) {
        alert('File size must be less than 2MB');
        submitEvent.preventDefault();
    }
    
    var filename = $("#cv").val();
    var extension = filename.replace(/^.*\./, '');
    if (extension == filename) {
        extension = '';
    } else {
        extension = extension.toLowerCase();
    }
    switch (extension) {
        case 'pdf':
        case 'doc':
        case 'docx':
        case 'png':
        case 'jpg':
        case 'jpeg':
        case 'txt':
            /*$("#qual").submit(function(e){
                $("#qual").unbind('submit').submit()
            });*/
            console.log("valid extension");
            break;
            
        default:
            alert('Inavlid file type')
            submitEvent.preventDefault();
            return false;
    }
});
      </script>

  </body>
</html>

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
    if(!(preg_match("/^[a-zA-Z -]*$/", $fname))){
      ?><script type="text/javascript">alert('First Name invalied');</script><?php
    }
    
    elseif (!(preg_match("/^[a-zA-Z -]*$/", $lname))) {
      ?><script type="text/javascript">alert('Last Name invalied');</script><?php
    
   }
    elseif (!(preg_match("/^[A-Za-z][A-Za-z0-9]{5,21}$/", $user_id))) {
      ?><script type="text/javascript">alert('User id invalied');</script><?php
    }
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      ?><script type="text/javascript">alert('Email id inValied');</script><?php
      
    }
    elseif (!(preg_match("/^[6-9][0-9]{9}$/", $phone))) {
      ?><script type="text/javascript">alert('Phone Number cannot Valied');</script><?php
     
    }
    elseif ($gender=="") {
      ?><script type="text/javascript">alert('gender cannot blank');</script><?php
    }
    elseif ($imgname=="") {
      ?><script type="text/javascript">alert('Please select an image');</script><?php
    }
    elseif ($password=="") {
      ?><script type="text/javascript">alert('password  cannot Empty');</script><?php
    }
    elseif ($cpassword=="") {
      ?><script type="text/javascript">alert('Confirm your password');</script><?php
    }
    elseif ($password!==$cpassword) {
      ?><script type="text/javascript">alert('Password are Not Match');</script><?php
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
    }
    





}
?>


