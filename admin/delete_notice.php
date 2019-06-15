<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from notice where id='$nid'");

header('location:index.php?page=notification');

?>