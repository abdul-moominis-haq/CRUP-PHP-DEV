<?php include("connection.php");
$name = $_POST['name'];
  $age = $_POST['age'];
  
//   $marital_status = $_POST['marital_status'];
//   $num_children = $_POST['num_children'];
  $cause_of_death = $_POST['cause_of_death'];
  $place_of_death = $_POST['place_of_death'];
  $admission_date = $_POST['admission_date'];
  $discharge_date = $_POST['discharge_date'];

  $sql = "insert into deceased (Name, Age,  cause_of_death, place_of_death, admission_date, discharge_date) VALUES ('$name', '$age', '$cause_of_death', '$place_of_death', '$admission_date', '$discharge_date')";

$providedResults=mysqli_query($connection,$sql);


header("Location: page.php");


?>