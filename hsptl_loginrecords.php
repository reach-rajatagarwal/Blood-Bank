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
                    $sql="INSERT INTO hospital_login (`Name`, `City`, `Address`,`Branch`, `Phone_No`, `Email`,`Password`)
                    VALUES('$_POST[Name]','$_POST[City]','$_POST[Address]','$_POST[Branch]','$_POST[Number]','$_POST[email]','$password')"; 
                    $query = mysqli_query($conn, $sql);
                    if (!$query) {
                        die ('SQL Error: ' . mysqli_error($conn));
                    }else{
                        header("Location: hsptl_login.php");
                    }
              }else{
                  $_SESSION['Msg'] = "Password and confirm password did not match!";
                  header("Location: hsptl_sgnup.php");
              }
        ?>
    </body>
</html>