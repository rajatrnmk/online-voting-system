<?php
  include("connect.php");
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $phoneno = $_POST['phoneno'];
  $photo = $_FILES['photo']['name'];
  $tmp_name = $_FILES['photo']['tmp_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $role = $_POST['role'];
  if($password == $cpassword){
      move_uploaded_file($tmp_name,"../uploaded_files/$photo");
      $insert = mysqli_query($connect, "INSERT INTO online (firstname , lastname ,address,phoneno,photo, username, password,role,status,votes) VALUES ('$firstname','$lastname','$address','$phoneno','$photo','$username','$password','$role',0,0 )");
      if($insert){
        echo '
        <script>
           alert("registration successful!");
           window.location = "../index.html";
        </script>
       ';

      }
      else{
        echo '
        <script>
           alert("some error occured!");
           window.location = "../register.html";
        </script>
       ';
      }

  }
  else{
      echo '
       <script>
          alert("password and confirm password does not match");
          window.location = "../register.html";
       </script>
      ';
  }



?>
