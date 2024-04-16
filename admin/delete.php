<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from about where id='$id' ";
$dq=mysqli_query($con,$delete);
header("location: about.php");

?>

<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from menu where id='$id' ";
$dq=mysqli_query($con,$delete);
header("location: menu.php");

?>

<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from product where id='$id' ";
$dq=mysqli_query($con,$delete);
header("location: product.php");

?>

<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from costomer where id='$id' ";
$dq=mysqli_query($con,$delete);
header("location: costomer.php");

?>