<?php
include("database.php");

$db= $conn;
$tableName="reviewpost";
$columns= ['name', 'review'];
$fetchData = fetch_data($laoziml_booking, $reviewpost, $name, $review);

function fetch_data($laoziml_booking, $reviewpost, $name, $review){
 if(empty($laoziml_booking)){
  $msg= "Database connection error";
 }elseif (empty($name) || !is_array($review)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($reviewpost)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $name, $review);
$query = "SELECT ".$name" FROM $reviewpost"." ORDER BY name DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "$name, $review"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>