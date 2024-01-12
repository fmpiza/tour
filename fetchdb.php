<?php
$host = "localhost"; //IP of your database
$userName = "laoziml_monica"; //Username for database login
$userPass = "*88Zamzamfridolin0683168429"; //Password associated with the username
$database = "laoziml_booking"; //Your database name

$connectQuery = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `reviewpost` ORDER BY `name` ASC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
        $result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($result_array, $row);
        }

    }

    echo json_encode($result_array);

}
?>