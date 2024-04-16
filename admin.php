<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input{
    width: 300px;
    display: block;
    outline: none;
    border: none;
    padding: 12px;
    margin-bottom: 10px;
}

section {
    width: 350px;
    height: 400px;
    background-color: antiquewhite;
    display: flex;
    align-items: center;
    /* justify-content: center; */
 flex-direction: column;
 gap: 50px;
 padding: 30px 15px;
 margin: auto;
 margin-top: 50px;
}
.first h2{
    color:salmon;
}
.secound input{
    margin-bottom: 20px;
}

.btn{
    width: 320px;
    padding: 10px;
    background-color: rgb(3, 3, 68);
    color: white;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;
    cursor: pointer;
    
}
    </style>
   
</head>
<body>
<section>
        <div class="first">
         <h2>Employe Login Page</h2>
        </div>
        <div class="secound">
   <form action="" method="POST">
   <input type="email" name="email" placeholder="Enter Email" >
   <input type="password" name="password" placeholder="Enter password">
   <button type="submit" name="submit" class="btn">Sing-in</button>
   </form>
        </div>
        <div>
        <?php
        if(isset($_SESSION['success'])&& $_SESSION['success']!=''){
      echo'<h2>'.$_SESSION['success'].'</h2>';
         unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
           echo'<h2>'. $_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
        </div>
    </section>
</body>
</html>

<?php
 include('./admin/conection.php');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

// $insert="insert into admin (email,password) values ('$email','$password') ";
// $q=mysqli_query($con,$insert);

$res = mysqli_query($con ,"SELECT * FROM `admin` WHERE `email`= '$email' AND `password`='$password' " );

$row = mysqli_num_rows($res);

if($row){
    $_SESSION['success']="Admin information is valid";
    header("location: ./admin/dashboard.php");
}
else{
    $_SESSION['status']="Admin information is not valid";
    header("location: admin.php");
}
}