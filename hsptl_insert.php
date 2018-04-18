<?php 
	session_start();
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
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
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
                            <a href="hsptl_insert.php" onclick="" class="fs"><i class="glyphicon glyphicon-edit"></i> Add Blood Info</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu alert-dropdown">
                                <li>
                                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
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
            </div>    
            <div class="w3l-main">
	           <div class="w3l-from">
                    <form action="hsptl_insertQuery.php" method="post">	
                        <div class="user">
                            <label class="head">Blood Group</label>
                            <input type="text" name="blood_group" value="" placeholder="Enter available Blood Group" required>
                        </div>
                        <div class="clear"></div>
                        <div class="user">
                            <label class="head">City</label>
                            <input type="text" name="city" value="" placeholder="Enter your City">
                        </div>
                        <div class="clear"></div>
                        <div class="user">
                            <label class="head">Address</label>
                            <input type="text" name="address" value="" placeholder="Enter your Address">
                        </div>
                        <div class="clear"></div>
                        <div class="user">
                            <label class="head">Status</label>
                            <input type="text"  name="status" value="" placeholder="Enter Current status (ex: Available)">
                        </div>
                        <div class="clear"></div>
                        <div class="rem">
                            <div class="btn">
                                <input type="submit" name="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	<!-- Default-JavaScript --> 
    <script>
        function msg( )
        {
            alert(" Data Inserted Successfully!");
        }
    </script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</body>
</html>