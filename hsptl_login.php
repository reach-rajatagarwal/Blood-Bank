<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Blood Bank Hospital Login</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>Blood Bank Login</h1>
	<div class="contact-form">
	 <div class="signin">
     <form action="hsptl_loginCheck.php" method="post" >
	      <input type="text" class="user" value="Enter your Email ID" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email ID';}" required />
	      <input type="password" class="pass" value="Enter your Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Password';}" required />
          <input type="submit" value="Authenticate" />
          <p><a href="receiver_sgnup.php" style="float:left">Not a Member yet? Sign Up here</a> </p>
          <p><a href="#" onclick="myFunction()" style="float:right">Forgot Password?</a> </p>
          <pre style="padding-top:25px"><div id="errMsg">
        </div></pre>
        <?php 
            if(isset($_SESSION['errMsg'])){
                echo $_SESSION['errMsg'] ;
                $_SESSION['errMsg'] = "" ;
            }
         ?> 

	 </form>
	 </div>
	</div>
</div>
    
<!--forgot password script--->
<script>
function myFunction() {
    alert("A link has been sent to your Email ID to reset your password!");
}
</script>
</body>
</html>