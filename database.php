<?php
$hostName = "localhost";
$userName = "laoziml_monica";
$password = "*88Zamzamfridolin0683168429";
$databaseName = "laoziml_booking";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>