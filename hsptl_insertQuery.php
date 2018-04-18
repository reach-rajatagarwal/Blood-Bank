<?php 
	session_start();
?>
<html>
    <body>
            <?php
            $Name = $_SESSION['Name'];
            $db_host = 'localhost'; // Server Name
            $db_user = 'root'; // Username
            $db_pass = ''; // Password
            $db_name = 'blood_bank'; // Database Name

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            if (!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
            }
             $sql="INSERT INTO available_blood (`Blood_Group`,`Hospital`, `City`, `Address`,`status`)
            VALUES('".$_POST['blood_group']."','".$Name."','".$_POST['city']."','".$_POST['address']."','".$_POST['status']."')"; 
            $query = mysqli_query($conn, $sql);
            if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
            }
            if(isset($_POST['submit'])){
            header("Location:available_blood.php");
            }
?>
    </body>
</html>