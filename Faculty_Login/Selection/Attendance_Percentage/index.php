<?php 
session_start();
error_reporting(0);
$id=$_GET["id"];
/*if ($id=='') {
	header("location : http://localhost/attendance_trail/watch.php");
}*/
$db=mysqli_connect('localhost','root','','attendance');
$subject=$_SESSION['subject'];
$sql="SELECT * FROM take_attendance  WHERE subject='$subject' ORDER BY id ";
$ok=mysqli_query($db,$sql);
$number=mysqli_num_rows($ok);
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
         <p style="font-size: 30px;color: white"> Attendance %</p>
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
			  <p ><b>Subject : </b> <?php echo $subject; ?></p>
    <p ><b>Total Periods : </b> <?php echo $number; ?></p>
</div>
      <table>
  <tr>
    <th>
      Check
    </th>
    <th>
      Roll Number
    </th>
    <th>
      Present
    </th>
    <th>
      %
    </th>
  </tr>
<?php 


$arr=array("17911A04C1","17911A04C2","17911A04C3","17911A04C4","17911A04C5","17911A04C6","17911A04C8","17911A04C9",
"17911A04D0","17911A04D1","17911A04D2","17911A04D3","17911A04D4","17911A04D6","17911A04D7","17911A04D8","17911A04D9",
"17911A04E0","17911A04E1","17911A04E3","17911A04E4","17911A04E5","17911A04E9",
"17911A04F1","17911A04F3","17911A04F4","17911A04F5","17911A04F6","17911A04F7","17911A04F8",
"17911A04G0","17911A04G1","17911A04G2","17911A04G3","17911A04G4","17911A04G6","17911A04G7","17911A04G9",
"17911A04H0","17911A04H1","17911A04H3","17911A04H5","17911A04H6","17911A04H7","17911A04H8","17911A04H9","17911A04J0",
"18911A0415","18911A0416","18911A0417","18911A0418","18911A0419","18911A0420","18911A0421",
"16911A0414","16911A0435","16911A0481","16911A04P2","16911A04P8");
for ($i=0; $i < count($arr) ;$i++){ 
  $res=mysqli_query($db,$sql);
  $num=mysqli_num_rows($res);
  $count=0;
  while ($rows=mysqli_fetch_assoc($res)) {
  if ($rows[$arr[$i]]=="1") {
  $count++;
  }
  }
  $result=($count/$num)*100;
  if ($result<60) {
   echo "
<tr>
  <td>
    <i class='fa fa-close' style='font-size:24px;color:red;'></i>
  </td>
  <td>
    ".$arr[$i]."
  </td>
  <td>
    ".$count."/".$num."
  </td>
  <td>
    ".round($result, 2)."
  </td>
</tr>

   ";
  }
  else{
    echo "
<tr>
  <td>
    <i class='fa fa-check' style='font-size:24px;color:green;'></i>
  </td>
  <td>
    ".$arr[$i]."
  </td>
  <td>
    ".$count."/".$num."
  </td>
  <td>
    ".round($result, 2)."
  </td>
</tr>

   ";
  }
}
?>

</table>

		<div style="text-align: center;margin-top: 20px;">
					<button onclick="window.print()" class="btn btn-success">Save As</button>

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

<?php
mysqli_close($db);
 ?>