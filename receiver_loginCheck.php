<?php
   session_start();
   include("connectDb.php");
   $user_mail = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM `receiver_login` WHERE `Email`='".$user_mail."' AND `Password`='".$password."'";
   $result=mysqli_query($con,$sql);
   $row=mysqli_num_rows($result);
   if (!$result) {
    die(mysqli_error($con)); 
   }
   if($row > 0)
   {
      $data = mysqli_fetch_array($result);
    //  $_SESSION['Sl_No'] = $data['Sl_No'];
      $_SESSION['username'] = $data['First_Name'];
      $_SESSION['lastname'] = $data['Last_Name'];
      $_SESSION['phoneno'] = $data['Phone_No'];
      $_SESSION['email'] = $data['Email'];   
      $_SESSION['city'] = $data['City'];   
      header("Location: receiver_homepage.php");
   }
   else
   {
        $_SESSION['errMsg'] = "*Invalid username or password";
        header("Location: receiver_login.php");
   }  
?>