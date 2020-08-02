<?php 
session_start();
error_reporting(0);
$db = mysqli_connect('localhost','root','', 'attendance');
$roll_number=$_SESSION["roll_number"];
$sql="SELECT * FROM take_attendance  WHERE subject='DC - Ms.Kavitha' ORDER BY id DESC ";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
$sql1="SELECT * FROM take_attendance  WHERE subject='DC - Ms.Kavitha' ORDER BY id DESC ";
$res1=mysqli_query($db,$sql1);
 while ($rows1=mysqli_fetch_assoc($res1)) {
  if ($rows1[$roll_number]=="1") {
  $count++;
  }
  }
  $result=($count/$num)*100;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 	</title>
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
         <p style="font-size: 30px;color: white;">DC Attendance</p>
       </div>
     </div>
     <div class="col-sm-4">
    <div style="text-align: right;" id="remove">
    <p style="color: white;font-size:20px;margin-top: 10px;margin-right: 10px;text-decoration: none;"><a href="logout" style="color: white"><i class="fa fa-power-off" style="font-size:17px"></i>
 Log Out</a></p>
  </div>
     </div>
   </div>
 </nav>
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			
		</div>
		<div class="col-sm-4">
			<p><b>Total Classes : </b><?php echo $num; ?></p>
			<p><b>Present Classes : </b><?php if ($count==0) {
				echo "0";
			}
			else{
				echo $count;
			}
			  ?></p>
			<p><b> Percentage : </b><?php echo round($result, 2); ?></p>
			<table>
				<tr>
					<th>
						Date
					</th>
					<th>
						Time
					</th>
					<th>
						Present / Absent
					</th>
				</tr>
<?php 
while ($rows=mysqli_fetch_assoc($res)) {
	if ($rows[$roll_number]=="1") {
	echo "<tr>
					<td>
						".$rows["date_save"]."
					</td>
					<td>
						".$rows["time_save"]."
					</td>
					<td>
						<i class='fa fa-check' style='font-size:24px;color:green;'></i>
					</td>
				</tr>";
	}
	else{
echo "<tr>
					<td>
						".$rows["date_save"]."
					</td>
					<td>
						".$rows["time_save"]."
					</td>
					<td>
						<i class='fa fa-close' style='font-size:24px;color:red;'></i>
					</td>
				</tr>";

	}
}

 ?>
				
				
			</table>
		</div>
		<div class="col-sm-4">
			
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