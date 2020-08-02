<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body >
<style>
span.field-icon {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  right:1rem;
  top: 0.7rem;
  color: $input-label-color;
  z-index: 2;
}
span{
  margin:0px 10px;
}
</style>
	<nav class="navbar-nav" style="background-color: black;padding-top: 10px;">
    <div style="text-align: center;">
      <p style="font-size: 30px;color: white;">All In One Click</p>
    </div>
  </nav>
<div class="container">
  <div class="row" style="margin-top: 30px;">
    <div class="col-sm-4">
      
    </div>
     <div class="col-sm-4" >
 <div style="text-align: center;">
   <p style="font-size: 25px;"><b>BLM </b>  Welcomes You</p>
 </div>
<hr style="border-color: black">
 <br><br>
<div style="text-align: center;">
  <a href="Faculty_Login" class="btn btn-outline-primary btn-rounded waves-effect">Faculty
</a>
<a href="Student_Login" class="btn btn-outline-danger btn-rounded waves-effect">Student </a>
</div>
    </div>
     <div class="col-sm-4">
      
    </div>
 
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
<script>
  $('.toggle-password').on('click', function() {
  $(this).toggleClass('fa-eye fa-eye-slash');
  let input = $($(this).attr('toggle'));
  if (input.attr('type') == 'password') {
    input.attr('type', 'text');
  }
  else {
    input.attr('type', 'password');
  }
});

</script>

</body>
</html>