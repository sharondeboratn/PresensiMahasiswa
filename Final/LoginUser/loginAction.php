<?php
include("config.php");
include("firebaseRDB.php");

$username = $_POST['username'];
$password = $_POST['password'];

echo 'username: '.$databaseURL;
echo '</br>';
echo 'username: '.$username;
echo '</br>';
echo 'password: '.$password;
echo '</br>';

if($username == ""){
    echo "Email is required";

}else if($password == ""){
    echo "Password is required";

}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/operator", "username", "EQUAL", $username);
    $data = json_decode($retrieve, 1);
    //print_r($data['user']['password']);
    
    if(count($data) == 0){
        echo "<script>alert('Username atau Password salah')</script>";
        
    }else{
        if($data['user1']['password'] == $password){
            $_SESSION['user1'] = $data['user1']['username'];
            $_SESSION['password'] = $data['user1']['password'];
        
            header("location: ../User/home.php");
        }else{
            header("location: login.php");
        }
    }
}