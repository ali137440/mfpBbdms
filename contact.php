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
  <body style="background-color:#75daad;">
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
  <a  class="nav-link "  href="doner.php"  style="text-decoration: none;color: whilte"><i class="fa fa-user" style="padding-right: 8px"></i>DONORS</a>
  <a  class="nav-link "  href="bloodstock.php"  style="text-decoration: none;color: whilte"><i class="fa fa-tint" style="padding-right: 8px"></i>BLOOD STOCK</a>
   <a class="nav-link "  href="donetblood.php"  style="text-decoration: none;color: whilte"><i class="fa fa-users" style="padding-right: 8px"></i>REGISTRATION</a>
   
    <a class="nav-link " href="sendreq.php"  style="text-decoration: none;color: whilte"> <i class="fa fa-reply" style="padding-right: 8px"></i>BLOOD REQUEST</a>
  <a class="nav-link  " href="camp.php"  style="text-decoration: none;color: whilte"><i class="fa fa-home" style="padding-right: 8px"></i>CAMPS</a>
  <a class="nav-link " href="notice.php"  style="text-decoration: none;color: whilte"><i class="fa fa-bell" style="padding-right: 8px"></i>NOTICE</a>  
  <a class="nav-link active"  href="contact.php"  style="text-decoration: none;color: whilte"><i class="fa fa-phone-square" style="padding-right: 8px"></i>CONTACT</a>
</div>
            	 <!--<div id="list-example" class="list-group">
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
  	<h1>Contact Us</h1>
  	<br><br>
 <div class="container">
  <div class="row d-flex justify-content-right">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="contact.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1"> Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Full Name" required="required">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address" required="required">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone no" required="required">
    <lable id="lbltext" style="color: red;visibility: hidden;">Invalid Mobile Number</lable>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description<span style="color :red;">*</span></label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required="required"></textarea>
  </div>

  <!--
  <label for="exampleInputEmail1">Gender</label> &nbsp;&nbsp;&nbsp;&nbsp;
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
    <label for="exampleInputEmail1">Needed Blood Group</label>
   
    <select class="form-control" name="bloodgroup" id="exampleFormControlSelect1">
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
    <label for="exampleInputEmail1">Quantity</label>
    <input type="number" class="form-control" name="num" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Need blood quantity">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Your Picture</label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
  </div>
  
-->
  


  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button  type="submit"  name="submit" class="btn btn-primary">SEND</button>
         </div>
      </div>
     </div>
  
</form>
        </div>
      </div>
    </div>

<div class="col-md-6">
      <div class="card">
        <div class="card-body">
<div class="box" style="min-width:1090px;">
<table width="100%" border="0" cellspacing="2" cellpadding="10" style="text-align:left" align="center">
<tr>
<td valign="top" width="6%"><img src="images/address.png" alt="" width="25"/></td>
<td valign="top" width="8%"><strong>Address</strong></td>
<td valign="top" width="1%"><strong>:</strong></td>
<td width="100%">Chandernagore,<br> Pin : 712 136.<br />Dist. Hooghly,<br />
  West Bengal, INDIA.</td>
</tr>
<tr>
<td valign="top"><img src="images/phone.png" alt="" width="25" /></td>
<td valign="top"><strong>Phone</strong></td>
<td valign="top"><strong>:</strong></td>
<td>+91 7003927833<br />+91 8274856320</td>
</tr>
<tr>
<td><img src="image/fax.png" alt="" width="25" /></td>
<td><strong>Email id</strong></td>
<td><strong>:</strong></td>
<td>ali137440@gmail.com</td>
</tr>
<tr>
<td><img src="images/fax.png" alt="" width="25" /></td>
<td><strong>Fax</strong></td>
<td><strong>:</strong></td>
<td>033 2685 5001</td>
</tr>

</table>
</div>
</div>
</div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<?php
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
   if(!(preg_match("/^[a-zA-Z -]*$/", $name))){
      ?><script type="text/javascript">alert('Your Name Format invalied');</script><?php
    }
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      ?><script type="text/javascript">alert('Email id inValied');</script><?php
      
    }
     elseif (!(preg_match("/^[6-9][0-9]{9}$/", $phone))) {
      ?><script type="text/javascript">alert('Phone Number cannot Valied');</script><?php
     
    }
     
   else{
    $authKey = "327155AFuuNVkc5ea29264P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['phone'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "haider";


//Your message to send, Add URL encoding here.
$message = urlencode("Dear" .$name. "for visiting our BloodBank website, Our BloodBank Team Definetly contact as soon as Possible.");

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
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;

}


      
  // Authorisation details.
  /*$username = "ali137440@gmail.com";
  $hash = "d29296ebf3721b487c59ac9c3bc2f62e5164c07df2252aaef226c5d5b07c10ca";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = $_POST['name']; // This is who the message appears to be from.
  $numbers = "917003927833"; // A single number or a comma-seperated list of numbers
  $message = $_POST['description'];
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);

   if($result==true){
    echo"<script>alert('Massege send successfully');</script>";
   }
    }


  }
*/

 } ?>
  
  <?php
if(isset($_POST['submit'])){



//Your authentication key
$authKey = "327155AFuuNVkc5ea29264P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['phone'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "haider";


//Your message to send, Add URL encoding here.
$message = urlencode("Hi haiderali this is for you");

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
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;

}

?>
