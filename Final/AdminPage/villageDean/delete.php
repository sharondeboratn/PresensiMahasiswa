<?php
include("config.php");
include("firebaseRDB");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];

print_r($id);

//if($id != ""){
//    $delete = $db->delete("operator",$id);
//    echo "data deleted";
//}
