

<?php include("connection.php");



$nameUser=$_POST['user'];
$passwordUser=$_POST['pass'];
$getResult="insert into userinfo(email,password) values ('$nameUser','$passwordUser')";
$result=mysqli_query($connection,$getResult);

header("Location: page.php");





?>


