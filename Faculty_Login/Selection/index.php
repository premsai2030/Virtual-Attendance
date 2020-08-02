<?php
session_start();
error_reporting(0);
if ($_SESSION["username"]==true) {
  
}
else{
  header("location : http://localhost/attendance/Faculty_Login/index.php");
}
 unset($_SESSION['taken']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-color:white;">
<style type="text/css">
  @media only screen and (min-width: 599px){
  #show{
    display: none;
  }
}
  @media only screen and (max-width: 600px) {
  #remove{
    display: none;
  }


  }

  
</style>
	<nav class="navbar-nav fixed-top " style="background-color: black;padding-top: 10px;">
   <div class="row">
     <div class="col-sm-4">
       
     </div>
     <div class="col-sm-4">
       <div style="text-align: center;">
         <p style="font-size: 30px;color: white"><?php echo $_SESSION["username"]; ?></p>
       </div>
     </div>
     <div class="col-sm-4">
  <div style="text-align: right;" id="remove">
    <p style="color: white;font-size:20px;margin-top: 10px;margin-right: 10px;"><a href="http://localhost/attendance/logout.php" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
 Log Out</a></p>
  </div>
     </div>
   </div>
  </nav>
  <br><br><br><br>
<div class="container" >
<div class="row">
<div class="col-sm-6">
 <div style="text-align: center;">
   <div class="card text-white  mb-3" style="max-width: 28rem;">
  <div class="card-header" ><h4><a href="Take_Attendance" style="color: black"><i class="fa fa-book" style="font-size:24px"></i>
Take Attendance</a></h4></div>
  <div class="card-body">
    
    <p class="card-text" style="color: black;font-size: 15px;">It is very simple form of taking Attendance ......<br>
Just click the " <b>check box</b> " if students are present and mention the subject in the input box and  click on submit  <br>
Your Job is done !!!!
<br>
Make sure you entered is correct 

    </p>
  </div>
</div>
 </div>
   <div style="text-align: center;">
    <div style="text-align: center;">
   <div class="card text-white  bg-dark mb-3" style="max-width: 28rem;">
  <div class="card-header" ><h4><a href="Update_Attendance" style="color: white"><i class="fa fa-pencil-square-o" style="font-size:20px"></i>
Update Attendance</a></h4></div>
  <div class="card-body">
    
    <p class="card-text" style="color: white;font-size: 15px;">It is very simple to update the attendance <br>
      Go to required date and click on it 
      You will see the attendance list and simply click on update at the bottom of the page 
      and update the attendance <br>
      It is quite simple as that !!

    </p>
  </div>
</div>
 </div>
 </div>
</div>
<div class="col-sm-6">
  <div style="text-align: center;">
    <div style="text-align: center;">
   <div class="card text-white  bg-success mb-3" style="max-width: 28rem;">
  <div class="card-header" ><h4><a href="Attendance_Percentage" style="color: white"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Attendance %</a></h4></div>
  <div class="card-body">
    
    <p class="card-text" style="color: white;font-size: 15px;">
      A simple way to check the students Attendance Percentage<br>
      <br><br> <br><br>

    </p>
  </div>
</div>
 </div>
 </div>
   <div style="text-align: center;">
    <div style="text-align: center;">
   <div class="card text-white  bg-danger mb-3" style="max-width: 28rem;">
  <div class="card-header" ><h4><a href="Attendance_less_than_60" style="color: white"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attendance < 60 %</a></h4></div>
  <div class="card-body">
    
    <p class="card-text" style="color: white;font-size: 15px;">We provides you .............<br>
      A simple way to check the students who are  having the attendance percentage less than  "60"<br>
      <br><br> 

    </p>
  </div>
</div>
 </div>
 </div>
  </div>

</div>
	
</div>
<br><br><br>
<div id="show">
  <nav class="navbar-nav fixed-bottom" style="background-color: black;padding: 10px;">
 <div class="row">
   <div class="col-sm-2"></div>
  <div class="col-sm-6">
    <div style="text-align: center;">
      <a href="logout" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
 Log Out</a>
    </div>
  </div>
    <div class="col-sm-2"></div>

 </div>
</nav>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

</body>
</html>


