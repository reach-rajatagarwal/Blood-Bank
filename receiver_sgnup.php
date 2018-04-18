<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Receiver's Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="receiver_loginrecords.php" method="post" style="color:darkred; padding-bottom:20px;">
				<input placeholder="First Name" name="FirstName" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				<input placeholder="Last Name" name="LastName" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span>
				<input placeholder="Phone Number" name="Number" class="number" type="number" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span>
				<input placeholder="Email" name="email" class="mail" type="email" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input placeholder="Blood Group" name="BloodGrp" class="blood_grp" type="text" required="">
					<span class="icon5"><i class="fa fa-tint" aria-hidden="true"></i></span>
                <input placeholder="City" name="City" class="city" type="text" required="">
					<span class="icon6"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
				<input  placeholder="Password" name="Password" class="pass" type="password" required="">
					<span class="icon7"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				<input  placeholder="Confirm Password" name="confirmpassword" class="pass" type="password" required="">
					<span class="icon8"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				
				<input type="submit" value="sign up" onclick="msg()"><br>
                    <span style="font-size:20px;" >
                    <?php 
                        if(isset($_SESSION['Msg'])){
                            echo $_SESSION['Msg'] ;
                            $_SESSION['Msg'] = "" ;
                        }
                    ?>
                    </span>
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->
</body>
</html>