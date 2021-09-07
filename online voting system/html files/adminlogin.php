<?php
if(!isset($_SESSION['adminLoggedin'])) 
{ 
	session_start();
}
?>
<html>
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        
        
         
        <div id="bodysection">
            <form action="" method="POST">
                <h2>ADMIN LOGIN</h2><br>
                <div id="textfield">
                    <input type="text" name="username" placeholder="admin name"><br><br>
                    <input type="password" name="password" placeholder="password"><br><br>
                </div>
                
                <div class="butt">
                    <button type="submit" name="loginbtn">login</button><br><br>

                </div>
                 <a href="../index.html">HOME</a>
               
                 
                
            </form>

        </div>

     </body>
</html>
<?php
if(isset($_POST['loginbtn'])){
	if($_POST['username']=="admin" & $_POST['password']=='atlee1368'){
        $_SESSION['adminLoggedin']="ok";
        echo '
        <script>
        alert("login succesfull!");
           
           window.location = "result.php";
        </script>
       ';
	}else{
		echo' <script>alert("Invalid Credentials.")</script>';
	}
}
 ?>