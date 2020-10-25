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
  <body  style="background-color: #75daad">
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
    
   <h2 class="text-center">EXCHANGE BLOOD LIST</h2> <br><br>

  <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form action="exchangebloadlist.php" method="post"  id="qual" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Applicant Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name" required="required">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address" required="required">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone no" required="required">
    
  </div>
  <label for="exampleInputEmail1">Gender<span style="color :red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required="required">
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
    <label for="exampleInputEmail1">Donet Blood Group<span style="color :red;">*</span></label>
   
    <select class="form-control" name="donetblood" id="exampleFormControlSelect1" required="required">
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
    <label for="exampleInputEmail1">Needed Blood Group<span style="color :red;">*</span></label>
   
    <select class="form-control" name="needblood" id="exampleFormControlSelect1" required="required">
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
    <!--<div class="form-group">
    <label for="exampleInputEmail1">Quantity<span style="color :red;">*</span></label>
    <input type="number" class="form-control" name="num" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Need blood quantity">
    
  </div>-->
  
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
      <button  type="submit"  id="btn2" name="submit" class="btn btn-primary">REQUEST SEND</button>
         </div>
      </div>
     </div>
  
</form>
        </div>
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
</div>--></div><br><br><br>

<?php
include('dbcon.php');

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $givegroup=$_POST['donetblood'];
    $needgroup=$_POST['needblood'];
    $imgname=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "exchangeimage/$imgname");
    $query="SELECT * FROM `doner` WHERE `bloodgroup`='$givegroup'";
    $run=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    $fname=$data['firstname'];
    $bloodgroup=$data['bloodgroup'];
    $phone1=$data['phone'];

 if(!(preg_match("/^[a-zA-Z -]*$/", $name))){
      ?><script type="text/javascript">alert('Your Name Format invalied');</script><?php
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
    else{

    $query1="INSERT INTO `outstock_blood`(`name`, `blood_group`, `phone`) VALUES ('$fname','$bloodgroup','$phone1')";
    $st1=$con->prepare($query1);
    $st1->execute();
    $query2="DELETE FROM `doner` WHERE `id`='$id'";
    $st=$con->prepare($query2);
    $st->execute();
    $query3=$con->prepare("INSERT INTO `exchanger`(`name`, `email`, `phone`, `gender`, `give_blood`, `need_blood`, `file`) VALUES ('$name','$email','$phone','$gender','$givegroup','$needgroup','$imgname')");
    if($query3->execute())
    {
      echo"<script>alert('insert');</script>";
    }
    else
    {
      echo"<script>alert('Not insert');</script>";
    }
    }













}
?>












<br><br><br>






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