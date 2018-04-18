<?php 
	session_start();
?>
<html>
    <body>
            <?php
            $username = $_SESSION['username'];
            $lastname = $_SESSION['lastname'];
            $phoneno = $_SESSION['phoneno'];
            $email = $_SESSION['email'];
            $city = $_SESSION['city'];
            $serialNumber = $_GET['id'];
            $db_host = 'localhost'; // Server Name
            $db_user = 'root'; // Username
            $db_pass = ''; // Password
            $db_name = 'blood_bank'; // Database Name

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            if (!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
            }
             $sql = "UPDATE available_blood SET requests= 'requested',requested_by = '" . $username."',last_name = '" . $lastname."',phone_no = '" . $phoneno."',email = '" . $email."',location = '" . $city."' WHERE Sl_No ='" . $serialNumber."'"; 
            $query = mysqli_query($conn, $sql);
            if (!$query) {
                die ('SQL Error: ' . mysqli_error($conn));
            }else{
                $return = $_POST;
                $return["json"] = json_encode($return);
                echo json_encode($return);              
            }
 //           if(isset($query)){
//                header("Location: receiver_homepage.php");
//                }
            ?>
    </body>
</html>