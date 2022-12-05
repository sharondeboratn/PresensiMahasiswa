<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$username = $_POST['username'];
$password = $_POST['password'];

echo "User name : " .$username;
echo "Password : " .$password;



if($username == "" || $password == ""){
    header("location: index.php");
}else{
    $update = $db->update("operator/", $_POST['username'], [
        "password"  => $_POST['password']
    ]);

    

    header("location: index.php");
}



    

