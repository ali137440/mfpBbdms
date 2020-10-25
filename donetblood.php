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
  <body style="background-color: #75daad;">
    <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content" >
                      <div style="width:100%;">
                         
                        
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
  <a  class="nav-link "  href="doner.php"  style="text-decoration: none;color: whilte"><i class="fa fa-user" style="padding-right: 8px"></i>DONORS</a>
  <a  class="nav-link "  href="bloodstock.php"  style="text-decoration: none;color: whilte"><i class="fa fa-tint" style="padding-right: 8px"></i>BLOOD STOCK</a>
   <a class="nav-link active"  href="donetblood.php"  style="text-decoration: none;color: whilte"><i class="fa fa-users" style="padding-right: 8px"></i>REGISTRATION</a>
   
    <a class="nav-link " href="sendreq.php"  style="text-decoration: none;color: whilte"> <i class="fa fa-reply" style="padding-right: 8px"></i>BLOOD REQUEST</a>
  <a class="nav-link  " href="camp.php"  style="text-decoration: none;color: whilte"><i class="fa fa-home" style="padding-right: 8px"></i>CAMPS</a>
  <a class="nav-link " href="notice.php"  style="text-decoration: none;color: whilte"><i class="fa fa-bell" style="padding-right: 8px"></i>NOTICE</a>  
  <a class="nav-link "  href="contact.php"  style="text-decoration: none;color: whilte"><i class="fa fa-phone-square" style="padding-right: 8px"></i>CONTACT</a>
</div><!-- <div id="list-example" class="list-group">
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
<div class="col-md-9" style="background-color: white;border-radius: 5px">
  <div class="content">
  	<h1>Donor Registration</h1>
  	<br><br>
 <div class="container ">
  <div class="row d-flex justify-content-left">
    <div class="col-md-8">
      <div class="card ">
        <div class="card-body">
          <form action="donetblood.php" method="post"  id="qual" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your First Name"required="required" value="<?php echo  @$_POST['fname'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name"required="required"  value="<?php echo  @$_POST['lname'];?>">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address"required="required"  value="<?php echo  @$_POST['email'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="dob" id="date" aria-describedby="emailHelp"required="required"  value="<?php echo  @$_POST['dob'];?>">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Date of Donate<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="dod" id="date1" aria-describedby="emailHelp"required="required"  value="<?php echo  @$_POST['dod'];?>">
    
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
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" maxlength="10" aria-describedby="emailHelp" placeholder="Enter your phone no"required="required"  value="<?php echo  @$_POST['phone'];?>">
    
  </div>
   <div class="row">
      <button type="submit"  name="otp" class="btn btn-success" style="margin-left: 20px">Generat OTP</button>  &nbsp;&nbsp;&nbsp;&nbsp;<input type="otp" name="otp" placeholder="Enter your OTP"> &nbsp;&nbsp;&nbsp;<button type="submit"  name="var" class="btn btn-info">Verified OTP</button>  
    </div><br>


<?php
if(isset($_POST['otp'])){

//Your authentication key
$authKey = "327155AFuuNVkc5ea29264P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['phone'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "haider";

//Your message to send, Add URL encoding here.
$message = "welcone to bloodbank your verification otp code is:";

//Define route 
$route = "default";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendotp.php?authkey=$authKey &mobile=$mobileNumber&message=Your%20otp%20is%202786&sender=$senderId &otp=2786";

$curl = curl_init($url);

curl_setopt_array($curl, array(
  //CURLOPT_URL => "https://api.msg91.com/api/v5/otp?authkey=Authentication%20Key&template_id=Template%20ID&extra_param=%7B%22Param1%22%3A%22Value1%22%2C%20%22Param2%22%3A%22Value2%22%2C%20%22Param3%22%3A%20%22Value3%22%7D&mobile=Mobile%20Number%20with%20Country%20Code&invisible=1&otp=OTP%20to%20send%20and%20verify.%20If%20not%20sent%2C%20OTP%20will%20be%20generated.&userip=IPV4%20User%20IP&email=Email%20ID&otp_length=&otp_expiry=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}

?>
<?php
if(isset($_POST['varify'])){
  $authKey = "327155AFuuNVkc5ea29264P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['phone'];
$otp=$_POST['otp'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "haider";

//Your message to send, Add URL encoding here.
//$message = "welcone to bloodbank your verification otp code is:";

//Define route 
$route = "default";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    //'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://api.msg91.com/api/v5/otp/verify?mobile=$mobileNumber &otp=$otp&authkey=$authKey";
$curl = curl_init($url);

curl_setopt_array($curl, array(
  //CURLOPT_URL => "https://api.msg91.com/api/v5/otp/verify?mobile=%24mobile&otp=%24otp&authkey=%24authentication_key",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $postData,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}
?>
 
   <div class="form-group">
    <label for="exampleInputEmail1">Address<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent address"required="required"  value="<?php echo  @$_POST['address'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">City<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent city name"required="required"  value="<?php echo  @$_POST['city'];?>">
    
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
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" maxlength="6" aria-describedby="emailHelp" placeholder="Enter your pincode/zip code"required="required"  value="<?php echo  @$_POST['pin'];?>">
    
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
   
    <select class="form-control" name="bloodgroup" id="exampleFormControlSelect1"required="required"  value="<?php echo  @$_POST['bloodgroup'];?>">
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
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" maxlength="10" placeholder="Password"required="required"  value="<?php echo  @$_POST['password'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password<span style="color :red;">*</span></label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Re-Enter Password"required="required"  value="<?php echo  @$_POST['cpassword'];?>">
  </div>
   <div class="form-group">
        <label class="col-md-6 control-label" for="act">Upload Your Document</label>
        <div class="col-md-8">
            <input required type="file" name="image" id="cv" class="btn btn-default"/>
            <span class="help-block" style="color: red">NOTE: File size must be less than 2MB. <br/> Only Allowed file types are png, jpeg, jpg, pdf, doc, docx, txt</span>
        </div>
    </div>
  <!--
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Your Picture<span style="color :red;">*</span></label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1"required="required"  value="<?php echo  @$_POST['image'];?>">
  </div>-->
  

  


  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button type="submit"  id="btn2" name="submit" class="btn btn-primary">Register</button>
         </div>
      </div>
     </div>
  
</form>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <img src="images/images.png" style="height: 400px">
    </div>
    
  </div>
   
 </div><br><br><br>
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
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
     


     <!--for date and time  validation-->
     <script>
$( "#dialog" ).dialog({ autoOpen: false });
$( "#opener" ).click(function() {
  $( "#dialog" ).dialog( "open" );
});
$("#date").datepicker({ changeMonth :true , changeYear: true,  minDate: new Date(1900,0,1), maxDate : new Date(2002,10,1)});
$("#date1").datepicker({ changeMonth :true , changeYear: true,  minDate: new Date(1900,0,1), maxDate : new Date(2030,0,1)});
</script>

<!--for file validation and size with extantion-->
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

<!-- end file validation and size with extantion-->

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
    $date=date("m/d/Y H:i:s");
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
    
   $datefor=$date-$dob;




    if(!(preg_match("/^[a-zA-Z-]*$/", $fname))){
      ?><script type="text/javascript">alert('First Name invalied format');</script><?php
    }
     elseif (!(preg_match("/^[a-zA-Z-]*$/", $lname))) {
      ?><script type="text/javascript">alert('Last Name invalied format');</script><?php
    
   }
   
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      ?><script type="text/javascript">alert('Email id inValied !');</script><?php
      
    }
    elseif (!is_numeric($pin)) {
       ?><script type="text/javascript">alert('Pincode only Numeric');</script><?php
    }
     
     elseif (!(preg_match("/^[A-Za-z][A-Za-z]{5,100}$/", $city))) {
      ?><script type="text/javascript">alert('City format invalied format');</script><?php
    }
    
     

    elseif (!(preg_match("/^[6-9][0-9]{9}$/", $phone))) {
      ?><script type="text/javascript">alert('Phone Number is inValied!');</script><?php
     
    }
  
    elseif ($password!==$cpassword) {
      ?><script type="text/javascript">alert('Password are Not Match');</script><?php
    }
 elseif ($datefor>18) {
      ?><script type="text/javascript">alert('Your Age is Below 18 you can not Donet Blood THANKING YOU!!!');</script><?php
    }


   


    else{
      $query="INSERT INTO `doner`(`firstname`, `lastname`, `email`, `dob`, `date`, `gender`, `address`, `city`, `district`, `pin`, `state`, `country`, `phone`, `bloodgroup`, `image`, `password`) VALUES ('$fname','$lname','$email','$dob','$dod','$gender','$address','$city','$district','$pin','$state','$country','$phone','$bloodgroup','$imgname','$password')";
      $run=mysqli_query($con,$query);
      if($run==true){
         ?><script type="text/javascript">alert('Your Data Insert Successfully to Our DataBase THANKING YOU!!!');</script>
          <script> location.replace("donetblood.php"); </script><?php
         // header('location:donetblood.php');
    }
       
      }
    }

?>