<?php
session_start();
error_reporting(0);
if ($_SESSION["taken"]=="taken") {
  header("location : http://localhost/attendance/Faculty_Login/Selection");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	<nav class="navbar-nav fixed-top" style="background-color: black;padding-top: 10px;">
   <div class="row">
     <div class="col-sm-4">
       
     </div>
     <div class="col-sm-4">
       <div style="text-align: center;">
         <p style="font-size: 30px;color: white">Take Attendance</p>
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
<div class="container" >
<form action="dbtake.php" method="post">
  <div class="row">
<div class="col-sm-4">
  <!-------------------------C1-E4------------------------->
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C1" value="1" >
    <label class="form-check-label" for="exampleCheck1" ><b>Ajay Kumar</b> (17911A04C1)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C2" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sudharshan</b> (17911A04C2)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vamshi Krishna</b> (17911A04C3)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C4" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Triveni</b> (17911A04C4)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C5" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vijay Kumar</b> (17911A04C5)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C6" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Anand Kumar Dixit</b> (17911A04C6)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C8" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Asif Iqbal</b> (17911A04C8)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04C9" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Priyanka</b> (17911A04C9)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D0" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Ravalika</b> (17911A04D0)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D1" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Swetha</b> (17911A04D1)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D2" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Bhanu Prakash</b> (17911A04D2)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vijay Naik</b> (17911A04D3)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D4" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Pruthvi Tej</b> (17911A04D4)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D6" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Rajiv Teja</b> (17911A04D6)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D7" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Tarun Deep</b> (17911A04D7)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D8" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Prerana</b> (17911A04D8)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04D9" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Kameshwari</b> (17911A04D9)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E0" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vinci Jhonson</b> (17911A04E0)</label>
</div>
  <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E1" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vamshi Goud</b> (17911A04E1)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sudeepthi</b> (17911A04E3)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E4" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Tejaswini</b> (17911A04E4)</label>
</div>
</div>
<div class="col-sm-4">
  <!-----------------------E5-H5----------------------->
  <div >

<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E5" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Shiva Teja</b> (17911A04E5)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04E9" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Prem sai vittal</b> (17911A04E9)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F1" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sahithi</b> (17911A04F1)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Aparna</b> (17911A04F3)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F4" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sai Chaitanya</b> (17911A04F4)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F5" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vaishnavi</b> (17911A04F5)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F6" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Arnold Sam</b> (17911A04F6)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F7" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Anand Nayak</b> (17911A04F7)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04F8" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Neeraja</b> (17911A04F8)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G0" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Riyaz</b> (17911A04G0)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G1" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Bharat Chandra</b> (17911A04G1)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G2" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vijay</b> (17911A04G2)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Surya Datta</b> (17911A04G3)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G4" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vivek</b> (17911A04G4)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G6" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Pradhyumna</b> (17911A04G6)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G7" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Rakesh</b> (17911A04G7)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04G9" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sowmya</b> (17911A04G9)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H0" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Kulpreet Singh</b> (17911A04H0)</label>
</div>
<div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H1" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Shivani</b> (17911A04H1)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H3" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vijay Rahul</b> (17911A04H3)</label>
</div>
  <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H5" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Sohan</b> (17911A04H5)</label>
</div>
 </div>
  </div>
  <!-------------------H6-last---------------->
<div class="col-sm-4">
  <div >

 
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H6" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Nihal</b> (17911A04H6)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H7" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Vishal</b> (17911A04H7)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H8" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Abhishiktha Vasu</b> (17911A04H8)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04H9" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Yeshwanth Reddy</b> (17911A04H9)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17911A04J0" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Prajwal Reddy</b> (17911A04J0)</label>
</div>
<label><b>LE ' S</b></label>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0415" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Jayanth Kumar</b> (18911A0415)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0416" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Aravind</b> (18911A0416)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0417" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Naveen</b> (18911A0417)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0418" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Dileep Kumar</b> (18911A0418)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0419" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Shiva Prasad</b> (18911A0419)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0420" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Pavani</b> (18911A0420)</label>
</div>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18911A0421" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Usha Sree</b> (18911A0421)</label>
</div>
<label><b>Re Admin :</b></label>
   <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="16911A0414" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>FURQAAN E</b> (16911A0414)</label>
</div>
 <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="16911A0435" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b> Sai Prakash</b> (16911A0435)</label>
</div>
 <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="16911A0481" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Saketh Sarma</b> (16911A0481)</label>
</div>
 <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="16911A04P2" value="1" >
    <label class="form-check-label" for="exampleCheck1" ><b>Thota Rohith</b> (16911A04P2)</label>
</div>
 <div class="form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="16911A04P8" value="1">
    <label class="form-check-label" for="exampleCheck1" ><b>Abhinay Reddy</b> (16911A04P8)</label>
</div>
 </div>
  </div>
 
</div>
   <div class="row" style="margin-top: 20px;">
    <div class="col-sm-4">

    </div>
 <div class="col-sm-4">
  <div class="form-group">
    <label for="exampleInputPassword1"><b>Subject :</b></label>
   <select name="subject" class="form-control">
    <option value="<?php echo $_SESSION['subject']; ?>"><?php echo $_SESSION['subject']; ?></option>
     <option value="DC - Ms.Kavitha">DC - Ms.Kavitha</option>
     <option value="ESD - Dr.Siva Kumar">ESD - Dr.Siva Kumar</option>
     <option value="AME - Mr.Mirza">AME - Mr.Mirza</option>
     <option value="TSSN - Ms.Satheesh">TSSN - Ms.Satheesh</option>
     <option value="DIP - Mr.Naresh Kumar">DIP - Mr.Naresh Kumar</option>
   </select>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1"><b>Some Message :</b></label>
    <input type="text" class="form-control" name="message" placeholder="something............" required>
  </div>
      <div style="text-align: center;">
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
      </div>
    </div>
     <div class="col-sm-4">
       
     </div>
  </div>
</form>
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


