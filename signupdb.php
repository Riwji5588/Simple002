<?php
include('firebaseRDB.php');
include('config.php');
$username = $_POST['username'];
$password = $_POST['pass'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/user","username", "EQUAL", $username);
$data = json_decode($retrieve, 1);
// echo '<pre>' ; 
// print_r($retrieve) ;
// echo '</pre>' ; 

if (isset($result['username'])) {
    
    echo "Username already used";
} else {
    $insert = $rdb->insert("/user", [
        "username" => $username,
        "password" => $password,
        "permission" => 0
    ]);
    $result = json_decode($insert,1);
    print_r($result);
    if (!isset($result['username'])) {
        $_SESSION['success'] = "Success Resiter";
        header("location: login.php");
    } else {
        $_SESSION['eror'] = "Invalid Eror Something, Contact Admin";
    }



}

?>