<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

if(isset($_POST['inputData']))
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $birthDate = $_POST['birthDate'];
    $residence = $_POST['residence'];
    $seating = $_POST['seating'];
    $seatingRow = $_POST['seatingRow'];

    $data = [
        'username'  => $username,
        'name' => $name,
        'birthDate' => $birthDate,
        'residence'  => $residence,
        'seating' => $seating,
        'seatingRow' => $seatingRow
    ];

    //print_r($data);

   //$insertData = $db->insert("unklabStudent", $data);
   $insertData = $db->insert("unklabStudent/".$username."/", $data);

   if($insertData){
       header("Location: index.php");
   }else{
       header("Location: index.php");
   }

}
