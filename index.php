<?php
        $db_host = 'localhost'; // Server Name
        $db_user = 'root'; // Username
        $db_pass = ''; // Password
        $db_name = 'blood_bank'; // Database Name

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
        }

        $sql = 'SELECT * 
                FROM available_blood';

        $query = mysqli_query($conn, $sql);

        if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Blood Bank</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Blood Bank</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">No New Notification <span class="label label-default">Alert</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-edit"></i> Sign Up <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="hsptl_sgnup.php"><i class="glyphicon glyphicon-edit"></i> Hospital Sign Up</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="receiver_sgnup.php"><i class="glyphicon glyphicon-edit"></i> Receiver Sign Up</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>  Login <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="hsptl_login.php"><i class="glyphicon glyphicon-log-in"></i> Login as Hospital</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="receiver_login.php"><i class="glyphicon glyphicon-log-in"></i> Login as Receiver</a>
                        </li>
                    </ul>
                </li>
            </ul>            
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <!--    <h1 class="page-header">
                            Blood Bank
                        </h1> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-table"></i> Blood Avaibility
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Blood Group</th>
                                        <th>Hospital</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Current Status</th>
                                        <th>Request</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query))
                                {
                                    echo '<tr class="jsearch-row">                          
                                            <td class="jsearch-field">'.$row['Sl_No'].'</td>
                                            <td class="jsearch-field">'.$row['Blood_Group'].'</td>
                                            <td class="jsearch-field">'.$row['Hospital'].'</td>
                                            <td class="jsearch-field">'.$row['City'].'</td>
                                            <td class="jsearch-field">'.$row['Address']. '</td>
                                            <td class="jsearch-field">'.$row['status'].'</td>
                                            <td><button type="button" style="width:100%" onclick="SendRequest('.$row["Sl_No"].')">Send Request</button></td>
                                        </tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
        function SendRequest(id){
            alert("You must Login to Send Request" );
            window.location.href = "http://localhost/bloodbank/receiver_login.php?id=" + id;
        }
    </script>    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>