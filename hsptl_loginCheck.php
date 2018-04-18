<?php
   session_start();
   include("connectDb.php");
   $user_mail = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM `hospital_login` WHERE `Email`='".$user_mail."' AND `Password`='".$password."'";
   $result=mysqli_query($con,$sql);
   $row=mysqli_num_rows($result);
   if (!$result) {
    die(mysqli_error($con)); 
   }
   if($row > 0)
   {
      $data = mysqli_fetch_array($result);
      $_SESSION['Sl_No'] = $data['Sl_No'];
      $_SESSION['Name'] = $data['Name'];
      header("Location: hsptl_homepage.php");
   }
   else
   {
        $_SESSION['errMsg'] = "*Invalid username or password";
        header("Location: hsptl_login.php");
   }
?>