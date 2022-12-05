<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

if(isset($_POST['inputData']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $residence = $_POST['residence'];

    $data = [
        'email'  => $email,
        'name' => $name,
        'password' => $password,
        'residence' => $residence

    ];

    //print_r($data);

    $insertStudents = $db->insert("Students/", $data);
    
    if($insertStudents){
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }

}
