<?php 
session_start();
error_reporting(0);
$db = mysqli_connect('localhost','root','', 'attendance');
if (isset($_POST["submit"])) {
	date_default_timezone_set("Asia/Kolkata");
$time=date("h:i:s");
$date=date("d-m-Y");
$subject=$_POST["subject"];
$something=$_POST["message"];
$from_subject=$_SESSION["subject"];
$_17911A04C1=$_POST['17911A04C1'];
$_17911A04C2=$_POST['17911A04C2'];
$_17911A04C3=$_POST['17911A04C3'];
$_17911A04C4=$_POST['17911A04C4'];
$_17911A04C5=$_POST['17911A04C5'];
$_17911A04C6=$_POST['17911A04C6'];
$_17911A04C8=$_POST['17911A04C8'];
$_17911A04C9=$_POST['17911A04C9'];
$_17911A04D0=$_POST['17911A04D0'];
$_17911A04D1=$_POST['17911A04D1'];
$_17911A04D2=$_POST['17911A04D2'];
$_17911A04D3=$_POST['17911A04D3'];
$_17911A04D4=$_POST['17911A04D4'];
$_17911A04D6=$_POST['17911A04D6'];
$_17911A04D7=$_POST['17911A04D7'];
$_17911A04D8=$_POST['17911A04D8'];
$_17911A04D9=$_POST['17911A04D9'];
$_17911A04E0=$_POST['17911A04E0'];
$_17911A04E1=$_POST['17911A04E1'];
$_17911A04E3=$_POST['17911A04E3'];
$_17911A04E4=$_POST['17911A04E4'];
$_17911A04E5=$_POST['17911A04E5'];
$_17911A04E9=$_POST['17911A04E9'];
$_17911A04F1=$_POST['17911A04F1'];
$_17911A04F3=$_POST['17911A04F3'];
$_17911A04F4=$_POST['17911A04F4'];
$_17911A04F5=$_POST['17911A04F5'];
$_17911A04F6=$_POST['17911A04F6'];
$_17911A04F7=$_POST['17911A04F7'];
$_17911A04F8=$_POST['17911A04F8'];
$_17911A04G0=$_POST['17911A04G0'];
$_17911A04G1=$_POST['17911A04G1'];
$_17911A04G2=$_POST['17911A04G2'];
$_17911A04G3=$_POST['17911A04G3'];
$_17911A04G4=$_POST['17911A04G4'];
$_17911A04G6=$_POST['17911A04G6'];
$_17911A04G7=$_POST['17911A04G7'];
$_17911A04G9=$_POST['17911A04G9'];
$_17911A04H0=$_POST['17911A04H0'];
$_17911A04H1=$_POST['17911A04H1'];
$_17911A04H3=$_POST['17911A04H3'];
$_17911A04H5=$_POST['17911A04H5'];
$_17911A04H6=$_POST['17911A04H6'];
$_17911A04H7=$_POST['17911A04H7'];
$_17911A04H8=$_POST['17911A04H8'];
$_17911A04H9=$_POST['17911A04H9'];
$_17911A04J0=$_POST['17911A04J0'];
$_18911A0415=$_POST['18911A0415'];
$_18911A0416=$_POST['18911A0416'];
$_18911A0417=$_POST['18911A0417'];
$_18911A0418=$_POST['18911A0418'];
$_18911A0419=$_POST['18911A0419'];
$_18911A0420=$_POST['18911A0420'];
$_18911A0421=$_POST['18911A0421'];
$_16911A0414=$_POST['16911A0414'];
$_16911A0435=$_POST['16911A0435'];
$_16911A0481=$_POST['16911A0481'];
$_16911A04P2=$_POST['16911A04P2'];
$_16911A04P8=$_POST['16911A04P8'];
$sql="INSERT INTO take_attendance(date_save,time_save,subject,something,from_subject,17911A04C1,17911A04C2,17911A04C3,17911A04C4,17911A04C5,17911A04C6,17911A04C8,17911A04C9,17911A04D0,17911A04D1,17911A04D2,17911A04D3,17911A04D4,17911A04D6,17911A04D7,17911A04D8,17911A04D9,17911A04E0,17911A04E1,17911A04E3,17911A04E4,17911A04E5,17911A04E9,17911A04F1,17911A04F3,17911A04F4,17911A04F5,17911A04F6,17911A04F7,17911A04F8,17911A04G0,17911A04G1,17911A04G2,17911A04G3,17911A04G4,17911A04G6,17911A04G7,17911A04G9,17911A04H0,17911A04H1,17911A04H3,17911A04H5,17911A04H6,17911A04H7,17911A04H8,17911A04H9,17911A04J0,18911A0415,18911A0416,18911A0417,18911A0418,18911A0419,18911A0420,18911A0421,16911A0414,16911A0435,16911A0481,16911A04P2,16911A04P8) VALUES('$date','$time','$subject','$something','$from_subject','$_17911A04C1','$_17911A04C2','$_17911A04C3','$_17911A04C4','$_17911A04C5','$_17911A04C6','$_17911A04C8','$_17911A04C9','$_17911A04D0','$_17911A04D1','$_17911A04D2','$_17911A04D3','$_17911A04D4','$_17911A04D6','$_17911A04D7','$_17911A04D8','$_17911A04D9','$_17911A04E0','$_17911A04E1','$_17911A04E3','$_17911A04E4','$_17911A04E5','$_17911A04E9','$_17911A04F1','$_17911A04F3','$_17911A04F4','$_17911A04F5','$_17911A04F6','$_17911A04F7','$_17911A04F8','$_17911A04G0','$_17911A04G1','$_17911A04G2','$_17911A04G3','$_17911A04G4','$_17911A04G6','$_17911A04G7','$_17911A04G9','$_17911A04H0','$_17911A04H1','$_17911A04H3','$_17911A04H5','$_17911A04H6','$_17911A04H7','$_17911A04H8','$_17911A04H9','$_17911A04J0','$_18911A0415','$_18911A0416','$_18911A0417','$_18911A0418','$_18911A0419','$_18911A0420','$_18911A0421','$_16911A0414','$_16911A0435','$_16911A0481','$_16911A04P2','$_16911A04P8')";
if (mysqli_query($db,$sql)) {
	$sql1="SELECT id FROM take_attendance WHERE  subject='$subject' AND date_save='$date' ORDER BY id DESC LIMIT 1";
	$_SESSION['taken']="taken";
	$res=mysqli_query($db,$sql1);
	$rows=mysqli_fetch_assoc($res);
	header("location:http://localhost/attendance/Faculty_Login/Selection/Take_Attendance/Show_Attendance?id=".$rows["id"]);

}
else{
	echo "sorry";
}

}






mysql_close($db);

 ?>