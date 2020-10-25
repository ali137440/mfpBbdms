
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    

   <h2 class="text-center">ADD BLOOD DONORS</h2>
 <br><br>
 <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form action="Add_doner.php" method="post" id="qual" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your First Name"required="required" value="<?php echo  @$_POST['fname'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name"required="required" value="<?php echo  @$_POST['lname'];?>">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address"required="required" value="<?php echo  @$_POST['email'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth<span style="color :red;">*</span></label>
    <input type="date" class="form-control" name="dob" id="date" aria-describedby="emailHelp"required="required" value="<?php echo  @$_POST['dob'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Donet<span style="color :red;">*</span></label>
    <input type="date" class="form-control" name="dod" id="date1" aria-describedby="emailHelp"required="required" value="<?php echo  @$_POST['dod'];?>">
    
  </div>
  <label for="exampleInputEmail1">Gender<span style="color :red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Transgender">
  <label class="form-check-label" for="inlineRadio3">Transgender</label>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone no"required="required" value="<?php echo  @$_POST['phone'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Address<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent address"required="required" value="<?php echo  @$_POST['address'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">City<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent city name"required="required" value="<?php echo  @$_POST['city'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">District<span style="color :red;">*</span></label>
      <select name="district" id="distO" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['district'];?>">
                            <option value="0">- SELECT FROM THE LIST -</option>

                            <option value="20">ALIPURDUAR</option>

                            <option value="13">BANKURA</option>

                            <option value="08">BIRBHUM</option>

                            <option value="03">COOCH BEHAR</option>

                            <option value="05">DAKSHIN DINAJPUR</option>

                            <option value="01">DARJEELING</option>

                            <option value="12" selected="selected">HOOGHLY</option>

                            <option value="16">HOWRAH</option>

                            <option value="02">JALPAIGURI</option>

                            <option value="24">JHARGRAM</option>

                            <option value="21">KALIMPONG</option>

                            <option value="17">KOLKATA</option>

                            <option value="06">MALDAH</option>

                            <option value="07">MURSHIDABAD</option>

                            <option value="10">NADIA</option>

                            <option value="11">NORTH 24 PARGANAS</option>

                            <option value="22">PASCHIM BARDHAMAN</option>

                            <option value="23">PURBA BARDHAMAN</option>

                            <option value="15">PASCHIM MEDINIPUR</option>

                            <option value="19">PURBA MEDINIPUR</option>

                            <option value="14">PURULIA</option>

                            <option value="18">SOUTH 24 PARGANAS</option>

                            <option value="04">UTTAR DINAJPUR</option>

                        </select>
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Pincode<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your pincode/zip code"required="required" value="<?php echo  @$_POST['pin'];?>">
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">State<span style="color :red;">*</span></label>
      <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="WEST BENGAL" selected>WEST BENGAL</option>
                            <option value="other">Others</option>
                          </select>
    
    </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Country<span style="color :red;">*</span></label>
    <select name="country" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['country'];?>">



                            <option value="INDIA" selected>INDIA</option>
                            <option value="other">Others</option>
                          </select>
    
    </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Blood Group<span style="color :red;">*</span></label>
   
    <select class="form-control" name="bloodgroup" id="exampleFormControlSelect1"required="required" value="<?php echo  @$_POST['bloodgroup'];?>">
      <option>A+</option>
      <option>B+</option>
      <option>A-</option>
      <option>B-</option>
      <option>O+</option>
       <option>O-</option>
        <option>AB+</option>
         <option>AB-</option>
         
    </select>
    </div>

 
  <div class="form-group">
    <label for="exampleInputPassword1">Password<span style="color :red;">*</span></label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password"required="required" value="<?php echo  @$_POST['password'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password<span style="color :red;">*</span></label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Re-Enter Password"required="required" value="<?php echo  @$_POST['cpassword'];?>">
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
      <button type="submit"  id="btn2"  name="submit" class="btn btn-primary">Register</button>
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
   <script>
$( "#dialog" ).dialog({ autoOpen: false });
$( "#opener" ).click(function() {
  $( "#dialog" ).dialog( "open" );
});
$("#date").datepicker({ changeMonth :true , changeYear: true,  minDate: new Date(1900,0,1), maxDate : new Date(2000,0,1)});
$("#date1").datepicker({ changeMonth :true , changeYear: true,  minDate: new Date(1900,0,1), maxDate : new Date(2030,0,1)});
</script>


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

    if(!(preg_match("/^[a-zA-Z-]*$/", $fname))){
      ?><script type="text/javascript">alert('First Name invalied');</script><?php
    }
     elseif (!(preg_match("/^[a-zA-Z-]*$/", $lname))) {
      ?><script type="text/javascript">alert('Last Name invalied');</script><?php
    
   }
   
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      ?><script type="text/javascript">alert('Email id inValied');</script><?php
      
    }
     
     elseif (!(preg_match("/^[A-Za-z][A-Za-z]{5,100}$/", $city))) {
      ?><script type="text/javascript">alert('City format invalied');</script><?php
    }
    
     elseif (strlen($pin)==5 && is_numeric($pin)) {
      ?><script type="text/javascript">alert('your pin invalied');</script><?php
    }

    elseif (!(preg_match("/^[6-9][0-9]{9}$/", $phone))) {
      ?><script type="text/javascript">alert('Phone Number cannot Valied');</script><?php
     
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
      $query="INSERT INTO `doner`(`firstname`, `lastname`, `email`, `dob`, `date`, `gender`, `address`, `city`, `district`, `pin`, `state`, `country`, `phone`, `bloodgroup`, `image`, `password`) VALUES ('$fname','$lname','$email','$dob','$dod','$gender','$address','$city','$district','$pin','$state','$country','$phone','$bloodgroup','$imgname','$password')";
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