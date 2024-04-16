<?Php

$con = mysqli_connect("localhost","root","","fourtpro");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $coment=$_POST['coment'];


$insert = "INSERT INTO `register`( `name`,`email`,`phone`,`coment`) VALUES ('$name','$email','$phone','$coment')";
$insertq=mysqli_query($con,$insert);

if($insertq){
    header("location: index.php");
}
else{
    header("location: code.php");
}

}
?>