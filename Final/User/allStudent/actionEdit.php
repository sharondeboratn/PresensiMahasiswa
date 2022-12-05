<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

$userID = $_POST['userID'];
$username = $_POST['username'];
$birthDate = $_POST['birthDate'];
$residence = $_POST['residence'];
$seating = $_POST['seating'];
$seatingRow = $_POST['seatingRow'];

echo $userID;
echo $username;
echo $birthDate;
echo $residence;
echo $seating;
echo $seatingRow;




if($username == "" || $userID == "" || $birthDate == "" || $residence == "" || $seating == "" || $seatingRow == ""){
   header("location: index.php");
}else{
    $update = $db->update("unklabStudent/", $userID, [
        "username"  => $_POST['userID'],
        "name"  => $_POST['username'],
        "birthDate"  => $_POST['birthDate'],
        "residence"  => $_POST['residence'],
        "seating"  => $_POST['seating'],
        "seatingRow"  => $_POST['seatingRow']
    ]);
        
    header("location: index.php");
}

//
//include("config.php");
//include("firebaseRDB.php");
//
//$db = new firebaseRDB($databaseURL);
//
//$residence = $_POST['residence'];
//$seating = $_POST['seating'];
//$seatingRow = $_POST['SeatingRow'];
//echo "residence : " .$residence;
//echo "seating : " .$seating;
//echo "row : " .$seatingRow;
//if($residence == "" || $seating == "" || $seatingRow == ""){
//    header("location: index.php");
//}else{
//    //$update = $db->update("unklabStudent", $username, [
//        //"residence"  => $_POST['residence'],
//    $update = $db->update("unklabStudent", $residence, [
//        "seating"  => $_POST['seating'],
//        "seatingRow" => $_POST['seatingRow']
//    ]);
//
//    header("location: index.php");
//}



//if(isset($_POST['inputData']))
//{
//    $residence = $_POST['residence'];
//    $seating = $_POST['seating'];
//    $seatingRow = $_POST['row'];
//
//    $data = [
//        'username'  => "",
//        'name' => "",
//        'birthDate' => "",
//        'residence'  => $residence,
//        'seating' => $seating,
//        'seatingRow' => $seatingRow
//    ];
//
//    if($residence == "" || $seating == "" || $seatingRow == ""){
//        header("location: index.php");
//    }else{
//        $updated = $db->update("unklabStudent", $residence, $data);
//    
//        header("location: index.php");
//    }
//}
