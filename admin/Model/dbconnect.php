<?php

$servername     = "localhost";
$db_username    = "root";
$db_password    =   "";
$db_name        = "project";
$db = mysqli_connect($servername,$db_username,$db_password,$db_name);
function execute($query){
    global $servername,$db_username,$db_password,$db_name;
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
    $result = mysqli_query($conn,$query);
    echo $result;
    return $result;
    
}
function getResult($query){ //this one is for select query
    global $servername, $db_username, $db_password,$db_name;
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
    $result = mysqli_query($conn,$query);
    return $result;
}
function getArray($query){
    global $servername, $db_username, $db_password,$db_name;
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
    $result = mysqli_query($conn,$query);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function getRow($query){
    global $servername, $db_username, $db_password,$db_name;
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
    $result = mysqli_query($conn,$query);
    $row = mysqli_num_rows($result);
    return $row;

}

?>