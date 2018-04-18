<?php 
	session_start();
?>
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

        $sql = "SELECT * FROM available_blood WHERE available_blood.requests='Requested' AND available_blood.Hospital = '".$Name."'";

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
                <a class="navbar-brand" href="hsptl_homepage.php">Blood Bank</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="available_blood.php" onclick="" class="fs"><i class="glyphicon glyphicon-list"></i> View all Posts</a>
                </li>
                <li>
                    <a href="hsptl_insert.php" onclick="" class="fs"><i class="glyphicon glyphicon-edit"></i> Add Blood Info</a>
                </li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['Name'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="hsptl_logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>
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
                                <i class="fa fa-table"></i> Blood Requests
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
                                        <th>Blood Group</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>City</th>
                                        <th>Phone Number</th>
                                        <th>Email ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query))
                                {
                                    
                                    echo '<tr class="jsearch-row">                          
                                            <td class="jsearch-field">'.$row['Blood_Group'].'</td>
                                            <td class="jsearch-field">'.$row['requested_by'].'</td>
                                            <td class="jsearch-field">'.$row['last_name'].'</td>
                                            <td class="jsearch-field">'.$row['location'].'</td>
                                            <td class="jsearch-field">'.$row['phone_no']. '</td>
                                            <td class="jsearch-field">'.$row['email'].'</td>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>