<?php
if (isset($_GET['id'])){
$id=$_GET['id'];
include('dbcon.php');
$query="DELETE FROM `doner` WHERE `id`= '$id'";
$run=mysqli_query($con,$query);
if($run==true){
    header('location:doner_list.php');

}
}
?>