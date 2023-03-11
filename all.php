<?php

include('firebaseRDB.php');
include('config.php');
$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/data");
$data = json_decode($retrieve, 1);



$arra[] = array(
    "ModeStatus" => $data['ModeStatus'],
    "AutoRelayStatus" => $data['Auto Relay Status'],
    "LightValue" => $data['LightValue'],
    "ManualRelayStatus" => $data['Manual Relay Status'],
    "WaterValue1" => $data['WaterValue1'],
    "WaterValue2" => $data['WaterValue2'],

);

echo json_encode($arra);





// if (isset($_POST['function']) && $_POST['function'] == 'canvas') {
//     $data = $db->retrieve("/data");
//     $data = json_decode($data, true);
//     // echo $data['ModeStatus'];
//     if ($data['ModeStatus'] == 1) {
//         $insert = $db->update("/data", ["ModeStatus" => 0]);
//         $result = json_decode($insert, 1);
//         $_SESSION['ModeUse'] = " ";
//         //echo $result['ModeStatus'];
//         echo "Auto";
//     } else if ($data['ModeStatus'] == 0) {
//         $insert = $db->update("/data", ["ModeStatus" => 1]);
//         $result = json_decode($insert, 1);
//         $_SESSION['ModeUse'] = "checked";
//         //echo $result['ModeStatus'];
//         echo "Manual";
//     }
// }
?>