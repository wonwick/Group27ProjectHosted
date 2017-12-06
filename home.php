<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Tracking System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />



    <!--  Template  CSS    -->
    <link href="assets/css/templateStyle.css" rel="stylesheet"/>
    <link href="assets/css/addperson.css" rel="stylesheet"/>


    <!-- Icons -->

    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


    <title>Title</title>
</head>
<body>

<div class = "wrapper">
    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top" >
        <div class="container-fluid"   id = "topNav">

            <a class="navbar-brand " href="#" id = "logo">
                <img src="assets/img/logo.png"  class="img-rounded"></a>

                <ul class="nav navbar-nav pull-right">

                    <li><a href="#"> <i class="fa fa-bell-o fa-1x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                    <li><a href="index.php">Log Out</i></a></li>

                </ul>


        </div>

    </div>


    <!-- Content -->
    <div class="container-fluid" id = "x" >
        <div class="row" >
            <div class="col-md-2 container-fluid"  >
                <div class="bar"  >
                    <div class = "affix container-fluid" id = "left-nav" >
                        <ul  class="nav " id = "ul-class"  ><br><br><br>
                            <li class = "active">
                                <a href="home.php">
                                    <i class="fa fa-dashboard fa-2x" aria-hidden="true"></i>
                                    <span>DASHBOARD</span>
                                </a>
                            </li>

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user fa-2x" aria-hidden="true"></i>PROFILES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">EMPLOYEE PROFILES</a></li>
                                    <li><a href="addPerson.php">REGISTRATIONS</a></li>

                                </ul>
                            </li>


                            <li class = "active">
                                <a href="tasks.php">
                                    <i class="fa fa-list-ul fa-2x" aria-hidden="true"></i>
                                    <span>TASKS</span>
                                </a>

                            </li>
                            <li class = "active">
                                <a href="map.php">
                                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                    <span>VEHICLE LOCATION</span>
                                </a>
                            </li>
                            <li class = "active">
                                <a href="#">
                                    <i class="fa fa-table fa-2x" aria-hidden="true"></i>
                                    <span>REPORTS</span>
                                </a>
                            </li>



                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-10">


                <div class="container-fluid">

                    <div class="span2" id = "imagg">
                        <img src="assets/img/dashboard.jpg" >
                    </div>
                </div>


            </div>

        </div>
    </div>


</div>




</body>
</html>
