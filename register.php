<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
       <style>

body{
	 background-image:url(https://cdn.pixabay.com/photo/2018/01/30/22/50/forest-3119826_1280.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
     color:white;
     
	 
}

/*-----for border----*/
.container{
	font-family:Roboto,sans-serif;
	  background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 463px;
     margin-top: 166px;
}
/*--- for label of first and last name---*/
.lastname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 10px;
}
.firstname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}
#lname{
	 margin-top:5px;
}
	  

/*---for heading-----*/
.heading{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/
#email{
	  margin-top: 5px;
}
/*-----------for Password--------*/
     /*-------label-----*/
.mail{
	 margin-left: 44px;
     font-family: sans-serif;
     color: white;
     font-size: 14px;
     margin-top: 13px;
}
.pass{
	 color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}
/*------------for phone Number--------*/
      /*----------label--------*/
.pno{
	 font-size: 18px;
     margin-left: -13px;
     margin-top: 10px;
     color: #ff9;
	
}	

     /*---------- for Input type--------*/
.col-xs-4.male{
	 color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
}
.col-xs-4.female {
     color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
	 padding-right: 95px;
}	
/*------------For submit button---------*/
.sbutton{
	 color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
	 box-shadow: 0px 2px 2px 0px white;
  	   
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#F96;
	color:#F96;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	/* #5900a6 */
}	 
.btn-primary{
    background-color:#F96;
    width:50%;
    margin: 0 0 0 130px;
}
    </style>

</head>
<body>

    
<?php




// define variables and set to empty values
$nameErr = $passErr = $repassErr= $phoneErr = $error = "";
$name = $pass = $repass = $phone = "";


session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Username is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }

  if (empty($_POST["repass"])) {
    $repassErr = "Password is required";
  } else {
    $repass = test_input($_POST["repass"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Number Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if(($_POST["repass"])!=($_POST["pass"])){
      $error = "Password Not Matching"; 
  }else{
    if (!empty($name)&&!empty($pass)){
      $new = array('username'=>$name,'password'=>$pass,'role'=>"user");
     array_push($_SESSION["usersdata"], $new);
     echo"<pre>";
    }
    
     print_r($_SESSION["usersdata"]);
   
      
   
   }
   
  
}

// $users_data[][]=array( 'username' => $name ,
//                        'password' => $pass,
//                         'role' => "user"

// );
// print_r($users_data);



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


 <div class="container">
 <!---heading---->
     <header class="heading"> Registration Form</header><hr></hr>
    <!---Form starting----> 
    <form action="results.php" method="post"‏>
	<div class="row ">
	 <!--- For Name---->
  
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Username :</label> </div>
		         <div class="col-xs-8">
                     <input type="text" name="name" id="name" placeholder="Enter your User Name" class="form-control ">
                     <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
             </div>
		      </div>
		 </div>
         
          <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password :</label></div>
				  <div class="col-xs-8">
                         <input type="password" name="pass" id="pass" placeholder="Enter your Password" class="form-control">
                         <span class="error"> <?php echo $passErr;?></span>
  <br><br>
				 </div>
          </div>
          </div>
          
           <!-----For Password and confirm password---->
           <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Re-type Password :</label></div>
				  <div class="col-xs-8">
                         <input type="password" name="repass" id="password" placeholder="Enter your Password" class="form-control">
                         <span class="error"> <?php echo $repassErr;?></span>
                         <span class="error"> <?php echo $error;?></span>
  <br><br>
				 </div>
          </div>
          </div>
          
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Phone Number :</label></div>
				  <div class="col-xs-8">
                         <input type="number" name="phone" id="password" placeholder="Enter your Phone Number" class="form-control">
                         <span class="error"> <?php echo $phoneErr;?></span>
  <br><br>
				 </div>
          </div>
		  </div>
		 
		 
         
		        
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>‏
		   </div>
		 </div>
	 </div>	 
</form>	 
		 
</div>

</body>		
</html>