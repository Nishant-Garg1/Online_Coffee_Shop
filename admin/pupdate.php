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
    <h2 style="text-align: center; margin:10px;">Product Update</h2>
        
<?php
include("./conection.php");
$id=$_GET['id'];
$select="select * from product where id='$id'";
$sq=mysqli_query($con,$select);
$res=mysqli_fetch_array($sq);

if(isset($_POST['product_submit'])){
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    $title=$_POST['title'];
    $price=$_POST['price'];

    $update="update product set img='$img_name',title='$title',price='$price' where id='$id'";
    $uq=mysqli_query($con,$update);
    if($uq){
        header("location: product.php");
    }
    else{
        header("location: pupdate.php");  
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
        <label for="">Price</label>
            <input type="texr" name="price" autocomplete="off" class="form-control" value="<?php echo $res['price'] ?>">
</div>


       
      <div >
        <button type="submit" name="product_submit">Update</button>
        </div>
      </form>