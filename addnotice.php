
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>admin Dashboard</title>
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
 
   <h2 class="text-center">ADD NOTICE DETAILS HERE</h2> <br><br>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">


 <form enctype="multipart/form-data" id="qual" class="form-horizontal" action="noticepost.php"  method="post">
    <div class="form-group">
    <label for="exampleFormControlInput1">Title<span style="color :red;">*</span></label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Give Your Notice Title"required="required">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description<span style="color :red;">*</span></label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"required="required"></textarea>
  </div>


    <div class="form-group">
        <label class="col-md-6 control-label" for="act">Upload Your Document</label>
        <div class="col-md-8">
            <input required type="file" name="image" id="cv" class="btn btn-default"/>
            <span class="help-block" style="color: red">NOTE: File size must be less than 2MB. <br/> Only Allowed file types are png, jpeg, jpg, pdf, doc, docx, txt</span>
        </div>
    </div>
    <br/>
    <!-- Button -->
    <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button type="submit" id="btn2"  name="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
     </div>
</form>


<!--
<form method="post" action="noticepost.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title<span style="color :red;">*</span></label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Give Your Notice Title"required="required">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description<span style="color :red;">*</span></label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"required="required"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Your Document<span style="color :red;">*</span></label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1"required="required">
  </div>
  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button type="submit" id="btn2"  name="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
     </div>
</form>-->
</div>
</div>
</div>
</div>
</div>










<br><br><br>






<?php
      include('footer.php');
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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


