<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

if(isset($_POST['inputData']))
{


    $date_format = $_POST['date'];
    $date = date("d-M-Y", strtotime($date_format)); 
    $time = $_POST['time'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $residence = $_POST['residence'];
    $worship = $_POST['worship'];
    $status = $_POST['status'];


    $data = [
        'date'  => $date,
        'distance' => "",
        'lat' => "",
        'long' => "",
        'time' => $time,
        'id' => $id,
        'name' => $name,
        'place'  => $place,
        'residence' => $residence,
        'worship' => $worship,
        'status' => $status
      

    ];


        print_r($data);

        $inserted = $db->insert("Absensi/".$date."/".$id."/", $data);
        //$inserted = $db->insert($date."10000102/", $data);

        if($inserted){
            header("Location: index.php");
        }else{
            header("Location: index.php");
        }

}