<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$venue=$_POST['venue'];
$organizer=$_POST['organizer'];
$description=$_POST['description'];
$date=$_POST['date'];
$imgname=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name, "campimage/$imgname");
$query="INSERT INTO `camp`(`title`, `venue`, `organizer`, `date`, `description`, `image`) VALUES ('$title','$venue','$organizer','$date','$description','$imgname')";
$run=mysqli_query($con,$query);
 if($run==true){
       ?>

         <script> location.replace("admin_dashboard.php"); </script>
       <?php
        // header('location:admin_dashboard.php');
        // exit;
      }
}
?>