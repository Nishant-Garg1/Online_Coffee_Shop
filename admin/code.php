<?php
include("./conection.php");

if(isset($_POST['about_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $img=$_FILES['img'];
    $img_name=$img['name'];
    $img_tem=$img['tmp_name'];
    move_uploaded_file($img_tem,"images/$img_name");

    $insert="insert into about (title,des,img) values ('$title','$des','$img_name') ";
    $iq=mysqli_query($con,$insert);
    header("location: ./about.php");
}

if(isset($_POST['menu_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $img=$_FILES['img'];
    $img_name=$img['name'];
    $img_tem=$img['tmp_name'];
    move_uploaded_file($img_tem,"images/$img_name");

    $insert="insert into menu (title,des,price,img) values ('$title','$des','$price','$img_name') ";
    $iq=mysqli_query($con,$insert);
    header("location: ./menu.php");
}

if(isset($_POST['product_submit'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img=$_FILES['img'];
    $img_name=$img['name'];
    $img_tem=$img['tmp_name'];
    move_uploaded_file($img_tem,"images/$img_name");

    $insert="insert into product (title,price,img) values ('$title','$price','$img_name') ";
    $iq=mysqli_query($con,$insert);
    header("location: ./product.php");
}

if(isset($_POST['costomer_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $img=$_FILES['img'];
    $img_name=$img['name'];
    $img_tem=$img['tmp_name'];
    move_uploaded_file($img_tem,"images/$img_name");

    $insert="insert into costomer (title,des,img) values ('$title','$des','$img_name') ";
    $iq=mysqli_query($con,$insert);
    header("location: ./costomer.php");
}

?>
