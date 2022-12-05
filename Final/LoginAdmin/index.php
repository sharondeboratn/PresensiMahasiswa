<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else{
    header("location: ../AdminPage/home.php");
}