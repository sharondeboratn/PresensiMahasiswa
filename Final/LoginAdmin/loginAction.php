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
    $retrieve = $rdb->retrieve("/userAdmin", "username", "EQUAL", $username);
    $data = json_decode($retrieve, 1);
    //print_r($data['admin']['password']);
    
    if(count($data) == 0){
        echo "<script>alert('Username atau Password salah')</script>";
        
    }else{
        if($data['admin']['password'] == $password){
            $_SESSION['user'] = $data['admin']['username'];
            $_SESSION['password'] = $data['admin']['password'];
            
            header("location: ../AdminPage/home.php");
        }else{
            header("location: login.php");
        }
    }
}
