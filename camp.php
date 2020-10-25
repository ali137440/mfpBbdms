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
  <body style="background-color: #75daad;">
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
  <a class="nav-link  active" href="camp.php"  style="text-decoration: none;color: whilte"><i class="fa fa-home" style="padding-right: 8px"></i>CAMPS</a>
  <a class="nav-link " href="notice.php"  style="text-decoration: none;color: whilte"><i class="fa fa-bell" style="padding-right: 8px"></i>NOTICE</a>  
  <a class="nav-link "  href="contact.php"  style="text-decoration: none;color: whilte"><i class="fa fa-phone-square" style="padding-right: 8px"></i>CONTACT</a>
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
  	<h1>Capms Details</h1><br><br>

<?php
include('dbcon.php');
$query="SELECT * FROM `camp`";
$run=mysqli_query($con,$query);
if($run==true){

	while($data=mysqli_fetch_assoc($run)){
		?>
		<div class="container">  	
<div class="row">
<div class="col-md-12">

  	<div class="card">
  <img src="campimage/<?php echo $data['image'];?>">
  <div class="card-body">
    <p class="card-text">Title:<?php echo $data['title']?> </p>
     <p class="card-text">Venue:<?php echo $data['venue']?> </p>
      <p class="card-text">Organized By:<?php echo $data['organizer']?> </p>
       <p class="card-text">Date:<?php echo $data['date']?> </p>
        <p class="card-text">Description:<?php echo $data['description']?> </p>
  </div>
</div>

</div>
<!--<div class="col-md-3">

  	<div class="card">
  <img class="card-img-top" src="blood1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text </p>
  </div>
</div>
</div>
<div class="col-md-3">
	
  	<div class="card">
  <img class="card-img-top" src="blood2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text </p>
  </div>
</div>
</div>
<div class="col-md-3">
	
  	<div class="card">
  <img class="card-img-top" src="blood3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text </p>
  </div>
</div>
</div>-->
</div>
</div>


<br><br><br>
<?php

	}
}
?>


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