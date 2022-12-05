<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['userAdmin'])){
    header("location: ../LoginAdmin/login.php");
}else{
    header("location: home.php");
}