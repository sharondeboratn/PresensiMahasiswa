<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

$id = $_GET['id'];

print_r($id);

//if($id != ""){
//   $delete = $db->delete("userAdmin", $id);
//   echo "data deleted";
//}
