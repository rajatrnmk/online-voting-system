<?php
session_start();
include('connect.php');
$votes = $_POST['gvotes'];
$total_votes =$votes + 1;
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['id'];
$update_votes= mysqli_query($connect,"UPDATE online SET votes='$total_votes' WHERE id='$gid'");
$update_user_status = mysqli_query($connect,"UPDATE online SET status=1 WHERE id='$uid'");
if($update_votes and $update_user_status){
    $candidate = mysqli_query($connect,"SELECT * FROM online WHERE role = 2");
    $candidatedata = mysqli_fetch_all($candidate,MYSQLI_ASSOC);
    $_SESSION ['userdata']['status']=1;
    $_SESSION ['candidatedata'] =$candidatedata ; 
    echo '
        <script>
           alert("thank you for voting...");
           window.location = "../html files/dasshboard.php";
        </script>
       ';
    
    
    

}
else{
    echo '
        <script>
           alert("error occured!");
           window.location = "../html files/dasshboard.php";
        </script>
       ';


}

?>
