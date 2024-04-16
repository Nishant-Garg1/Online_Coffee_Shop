<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <form action="" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:10px;">Menu Update</h2>
        
<?php
include("./conection.php");
$id=$_GET['id'];
$select="select * from menu where id='$id'";
$sq=mysqli_query($con,$select);
$res=mysqli_fetch_array($sq);

if(isset($_POST['menu_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
  

    $update="update menu set title='$title',des='$des',price='$price',img='$img_name' where id='$id'";
    $uq=mysqli_query($con,$update);
    if($uq){
        header("location: menu.php");
    }
    else{
        header("location: mupdate.php");  
    }
}
?>

        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control" value="<?php echo $res['img'] ?>">
</div>

<div>
        <label for="">Title</label>
            <input type="text" name="title"  class="form-control"  value="<?php echo $res['title'] ?>">
</div>

<div>
        <label for="">Description</label>
            <input type="texr" name="des" autocomplete="off" class="form-control" value="<?php echo $res['des'] ?>">
</div>

<div>
        <label for="">Description</label>
            <input type="texr" name="price"  class="form-control" value="<?php echo $res['price'] ?>">
</div>

       
      <div >
        <button type="submit" name="menu_submit">Update</button>
        </div>
      </form>