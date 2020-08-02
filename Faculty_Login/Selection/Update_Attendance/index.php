<?php 
session_start();
error_reporting(0);
 unset($_SESSION['updated']);
$db=mysqli_connect('localhost','root','','attendance');
$subject=$_SESSION["subject"];
$sql="SELECT * FROM take_attendance  WHERE subject='$subject' ORDER BY id DESC  ";
$ok=mysqli_query($db,$sql);
$number=mysqli_num_rows($ok);



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>hreytr</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         <p style="font-size: 30px;color: white">Update Attendance</p>
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
			<table style="margin-top: 30px;">
  <tr>
    <th>
      Date
    </th>
    <th>
      Subject
    </th>
    <th>
      Something
    </th>
  </tr>

<?php 
while ($rows1=mysqli_fetch_assoc($ok)) {
echo "<tr>
  <td>
  <a href='Update?date=".$rows1["id"]."' style='text-decoration:none'>".$rows1["date_save"]."</a>
   
  </td>
  <td>
   ".$rows1["subject"]."
  </td>
  <td>
   ".$rows1["something"]."
  </td>
</tr>";
}
 ?>

</table>


<?php

mysqli_close($db);
 ?>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>