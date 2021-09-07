<?php
     session_start();
     if(!isset($_SESSION['userdata'])){
         header('location:../login.html');
         


     }
     $userdata = $_SESSION['userdata'];
     $candidatedata =$_SESSION ['candidatedata'] ; 
     if($_SESSION['userdata']['status']==0){
         $status = '<b style="color:blue">NOT VOTED</b>';
     }
     else{
        $status = '<b style="color:green"> VOTED</b>';

     }
?>
    <html>
        <head>
        <title> dasshboard </title>
        <link rel="stylesheet" href="../css/dash.css">
        </head>
        <body>
        <div id="mainsection" >
        <a href="../login.html"><button  id= "b1">back</button></a><a href="logout.php"> <button id="b2" href="logout.php">logout</button></a>
        <h1>ONLINE VOTING SYSTEM </h1>
        <div id="profile">
            <img src="../uploaded_files/<?php echo $userdata['photo']?>"height ="200" width="200"><br><br>
            <div id="ud">
                <b>name:</b><?php echo $userdata['firstname']?> <?php echo $userdata['lastname']?><br><br>
                <b>contact number:</b><?php echo $userdata['phoneno']?><br><br>
                <b>address:</b><?php echo $userdata['address']?><br><br>
                <b>status:</b><?php echo $status?><br><br>
            </div>
        </div>
        <div id ="group">
        <?php
            if($_SESSION['candidatedata']){
                for($i=0;$i<count($candidatedata);$i++){
                    ?>
                    <div>
                    <div id="img">
                    <img src="../uploaded_files/<?php echo $candidatedata[$i]['photo']?>"height="120" width="120">
                    </div>
                    <div id="gd">
                        <b>candidate name:</b><?php echo $candidatedata[$i]['firstname']?> <?php echo $candidatedata[$i]['lastname']?><br><br>
                        <b>address:</b><?php echo $candidatedata[$i]['address']?><br><br>
                        <form action="../api/vote.php" method="POST">
                        <input type="hidden" name="gvotes" value="<?php echo $candidatedata[$i]['votes'] ?>">
                        <input type="hidden" name="gid" value="<?php echo $candidatedata[$i]['id'] ?>">
                        <?php 
                        if($_SESSION['userdata']['status']==0){
                            ?>
                            <input type="submit" name="votebtn" value="vote" id="votebtn" ><br><br>
                          <?php
                          

                        }
                        else{
                            ?>
                            <button  disabled type="button" name="votebtn" value="vote" id="done">voted</button><br><br>
                          <?php
                        }
                        ?>
                        
                        
                        </form>
                        <hr>
                    </div>
                    

                    </div>
                    
                     
                    
                    <?php
                }

                }
                else{

                }
    
                
                
            ?>
        
        </div>
        
        
        </body>
    </html>
