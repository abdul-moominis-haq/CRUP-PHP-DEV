<?php
include("connection.php");

if (isset($_GET['id'])) {
  $ids = $_GET['id'];
  $sql = "DELETE FROM deceased WHERE deceased_id = '$ids'";
  $queryResults = mysqli_query($connection, $sql);
  header("location:page.php");
}
?>