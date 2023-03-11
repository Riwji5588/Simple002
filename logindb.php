<?php
include('firebaseRDB.php');
include('config.php');
//  
$username = $_POST['username'] ; 
$password =$_POST['pass'];
// if($user == ""){
//     header("location: login.php");
// }else{



if (!isset($username)) {
    $_SESSION['error'] = 'กรุณากรอกชื่อผู้ใช้';
    echo 'กรุณากรอกชื่อผู้ใช้';
    //header("location: login.php");
} else {
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user","username", "EQUAL", $username);
    $data = json_decode($retrieve, 1);
    echo count($data) ; 
    if(count($data) == 0 ){
        echo "User not registered";
    }else{
        $id = array_keys($data)[0] ; 
        if($data[$id]['password'] == $password){
            $_SESSION['username'] =  $data[$id]['username'] ;  
            header("location: index.php");
        }
    }
}
?>