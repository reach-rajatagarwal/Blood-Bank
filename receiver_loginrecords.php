<?php 
	session_start();
?>
<html>
    <body>
            <?php
            $password = $_POST['Password'];
            $confirmpassword = $_POST['confirmpassword'];
            $passwordOK = "";

              if($password == $confirmpassword)
                {
                    $db_host = 'localhost'; // Server Name
                    $db_user = 'root'; // Username
                    $db_pass = ''; // Password
                    $db_name = 'blood_bank'; // Database Name

                    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                    if (!$conn) {
                        die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
                    }
                    $sql="INSERT INTO receiver_login (`First_Name`,`Last_Name`,`Phone_No`, `Email`, `Blood_Grp`, `City`,`Password`)
                    VALUES('$_POST[FirstName]','$_POST[LastName]','$_POST[Number]','$_POST[email]','$_POST[BloodGrp]','$_POST[City]','$password')"; 
                    $query = mysqli_query($conn, $sql);
                    if (!$query) {
                        die ('SQL Error: ' . mysqli_error($conn));
                    }
                    else{
                        header("Location: receiver_login.php");
                    }
              }else{
                  $_SESSION['Msg'] = "Password and confirm password did not match!";
                  header("Location: receiver_sgnup.php");
              }
            ?>
    </body>
</html>