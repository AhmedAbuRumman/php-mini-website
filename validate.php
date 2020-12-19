  
<?php
session_start();

$usersdata = $_SESSION["usersdata"];

echo "<pre>"; 

foreach($usersdata as $key => $value){
    
    if($usersdata[$key]["role"] == "admin"){

         if($_POST['username'] == $usersdata[$key]["username"] && $_POST['pass'] == $usersdata[$key]["pass"] ){
            
            header("Location: admin.php");
             }};

    if($usersdata[$key]["role"] == "user"){
        if($_POST['username'] == $usersdata[$key]["username"] && $_POST['pass'] == $usersdata[$key]["pass"] ){
         
            header("Location: normal.php");
          }}
     };


?>