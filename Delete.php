<?php
include 'conn.php';
$id=$_GET['id'];
$query_delete="delete from product where Product_id='$id'";
mysqli_query($conn,$query_delete);
header("Location:Schedule.php");
?>