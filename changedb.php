<?php

include('firebaseRDB.php');
include('config.php');

$db = new firebaseRDB($databaseURL);
$dbnum = array(0, 1);


if (isset($_POST['function']) && $_POST['function'] == 'mode') {
    $data = $db->retrieve("/data");
    $data = json_decode($data, true);
    // echo $data['ModeStatus'];
    if ($data['ModeStatus'] == 1) {
        $insert = $db->update("/data", [
            "ModeStatus" => 0,
        ]);
        $result = json_decode($insert, 1);
       
     
        echo "Auto";
    } else if ($data['ModeStatus'] == 0) {
        $insert = $db->update("/data", [
            "ModeStatus" => 1,
            
        ]);
        $result = json_decode($insert, 1);
        echo "Manual";
    }
}


if (isset($_POST['function']) && $_POST['function'] == 'canvas') {
    $data = $db->retrieve("/userlog");
    $data = json_decode($data, true);
    // echo $data['ModeStatus'];
    if ( $data['OnlineAdminUser'] == 1) {
        $insert = $db->update("/userlog", [
            "OnlineAdminUser" => 0,
        ]);
        $result = json_decode($insert, 1);
        //echo $result['ModeStatus'];
        echo "Open";
    } else if ($data['OnlineAdminUser'] == 0) {
        $insert = $db->update("/userlog", [
            "OnlineAdminUser" => 1,
        ]);
        $result = json_decode($insert, 1);
       
        //echo $result['ModeStatus'];
        echo "Close";
    }
}
?>