<?php 
session_start();
error_reporting(0);
/*if ($id=='') {
	header("location : http://localhost/attendance_trail/watch.php");
}*/
$db=mysqli_connect('localhost','root','','attendance');
$subject=$_SESSION['subject'];
//AND date_save BETWEEN '01-08-2020' AND '03-08-2020'
$sql="SELECT * FROM take_attendance  WHERE subject='$subject' ORDER BY id ";
$sql1="SELECT * FROM take_attendance  WHERE subject='$subject' ORDER BY id DESC";
$ok=mysqli_query($db,$sql);
$ok1=mysqli_query($db,$sql1);
$number=mysqli_num_rows($ok);
$username=$_SESSION["username"];
if ($username==true) {
  
}
else{
  header("location :http://localhost/attendance/Faculty_Login/");
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
         <p style="font-size: 30px;color: white"> From< - >To</p>
       </div>
     </div>
     <div class="col-sm-4">
    <div style="text-align: right;" id="remove">
    <p style="color: white;font-size:20px;margin-top: 10px;margin-right: 10px;"><a href="http://localhost/attendance/Faculty_Login/LOGOUT/" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
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
<form action="Result" method="get">
 <div class="row">
    <div class="col-sm-6">
    <div style="text-align: center;">
       <div class="form-group">
    <label for="exampleFormControlSelect1"><b>From Date</b></label>
    <select class="form-control" name="from" >
     <?php 
      $first1=0;
while ($rows=mysqli_fetch_assoc($ok)) {
if ($first1!=$rows["date_save"]) {
     echo" <option value=".$rows["date_save"].">".$rows["date_save"]."</option>";
     $first1=$rows["date_save"];
  }}
      ?>
     
    </select>
  </div>
    </div>
  </div>
   <div class="col-sm-6">
       <div style="text-align: center;">
       <div class="form-group">
    <label for="exampleFormControlSelect1"><b>To Date</b></label>
    <select class="form-control" name="to" >
         <?php 
         $first=0;
while ($rows1=mysqli_fetch_assoc($ok1)) {
  if ($first!=$rows1["date_save"]) {
     echo" <option value=".$rows1["date_save"].">".$rows1["date_save"]."</option>";
     $first=$rows1["date_save"];
  }
}
      ?>
    </select>
  </div>
    </div>
  </div>
 </div>
 <div class="row" style="margin-top: 20px;">
  <div class="col-sm-12">
     <div style="text-align: center;">
     <button class=" btn btn-success" type="submit" name="submit">Fetch</button>
   </div>
  </div>
 </div>
</form>

		</div>
 
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<br><br><br>
<div id="show">
  <nav class="navbar-nav fixed-bottom" style="background-color: black;padding: 10px;">
 <div class="row">
   <div class="col-sm-2"></div>
  <div class="col-sm-6">
    <div style="text-align: center;">
      <a href="http://localhost/attendance/Faculty_Login/LOGOUT/" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
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

<?php
mysqli_close($db);
 ?>