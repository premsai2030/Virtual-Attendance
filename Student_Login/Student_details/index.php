<?php 
session_start();
error_reporting(0);
$db = mysqli_connect('localhost','root','', 'attendance');
$roll_number=$_SESSION["roll_number"];
$sql="SELECT * FROM take_attendance  ";
$sql1="SELECT $roll_number FROM take_attendance";
$res1=mysqli_query($db,$sql1);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<style type="text/css">
 table{
      width: 100%;
      padding:10px; 
      border-collapse: collapse;
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}


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
<nav class="navbar-nav fixed-top" style="background-color: black;padding-top: 10px;">
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
    <p style="color: white;font-size:20px;margin-top: 10px;margin-right: 10px;"><a href="logout" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
 Log Out</a></p>
  </div>
     </div>
   </div>
  </nav>
  <br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-6">
			<table>
     <tr>
       <th>
         Subject
       </th>
       <th>
         Faculty Name
       </th>
     </tr> 
     <tr>
       <td><a href="DC">DC</a></td>
       <td>Ms.Kavitha</td>
     </tr>  
       <tr>
       <td><a href="ESD">ESD</a></td>
       <td>Dr.Siva Kumar</td>

     </tr> 
       <tr>
       <td><a href="AME">AME</a></td>
       <td>Mr.Mirza</td>

     </tr> 
       <tr>
       <td><a href="TSSN">TSSN</a></td>
       <td>Ms.Satheesh</td>

     </tr> 
       <tr>
       <td><a href="DIP">DIP</a></td>
       <td>Mr.Naresh Kumar</td>

     </tr> 
      </table>
        
		</div>
		<div class="col-sm-2">
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>