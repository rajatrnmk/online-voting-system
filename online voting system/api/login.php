<?php
session_start();
include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$role =$_POST['role'];
$check = mysqli_query($connect,"SELECT * FROM online WHERE username = '$username' AND password = '$password' AND role = '$role'");
if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    $candidate = mysqli_query($connect,"SELECT * FROM online WHERE role = 2");
    $candidatedata = mysqli_fetch_all($candidate,MYSQLI_ASSOC);
    $_SESSION ['userdata'] = $userdata;
    $_SESSION ['candidatedata'] =$candidatedata ; 
    echo '
        <script>
        alert("login succesfull!");
           
           window.location = "../html files/dasshboard.php";
        </script>
       ';

}
else{
    echo '
        <script>
           alert("user not found in our database!");
           window.location = "../login.html";
        </script>
       ';

}


?>