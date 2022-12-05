<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['operator'])){
    header("location: ../LoginUser/login.php");
}else{
    header("location: home.php");
}