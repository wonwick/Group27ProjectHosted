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



    <!-- Icons -->

    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


    <title>Title</title>

    <style>
        #myInput {
            background-image: url('/css/searchicon.png'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
        }

        #myTable {
            border-collapse: collapse; /* Collapse borders */
            width: 100%; /* Full-width */
            border: 1px solid #ddd; /* Add a grey border */
            font-size: 18px; /* Increase font-size */
        }

        #myTable th, #myTable td {
            text-align: left; /* Left-align text */
            padding: 12px; /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }

    </style>




</head>
<body>

<div class = "wrapper">
    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top" >
        <div class="container-fluid"   id = "topNav">

            <a class="navbar-brand " href="#" id = "logo">
                <img src="assets/img/logo.png"  class="img-rounded" ></a>

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
                                <a href="tasksExp1.php">
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

            <div class="col-md-10" >

                <div class="container-fluid" id = cont>

                    <div class = "row">
                        <div class ="col-md-8">

                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                            <?php
                            include_once("db/dbConnection.php");
                            $sql = "SELECT EmpID,Availability FROM Employee ORDER BY EmpID ASC";
                            $query = mysqli_query($connect, $sql);
                            if (!$query) {
                                die ('SQL Error: ' . mysqli_error($conn));
                            }
                            $id = 'EmpID';
                            $fullname = 'Availability';

                            //while loop removed from here
                            ?>
                            <table id="myTable">
                                <tr class="header">
                                    <th style="width:60%;">Employee ID</th>
                                    <th style="width:40%;">Status</th>

                                </tr>
                                <?php
                                while ($rows = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['EmpID']; ?></td>
                                        <td><?php echo $rows['Availability']; ?></td>

                                    </tr>
                                    <?php
                                }
                                ?>

                            </table>









                        </div>
                        <div class ="col-md-4">
                            <div class="container-fluid well span6">
                                <div class="row-fluid">
                                    <div class="span2" >
                                        <img src="assets/img/emp.jpg" class="img-circle">
                                    </div>

                                    <div class="span8">
                                        <h3>Employee Name</h3>
                                        <h6>Email: MyEmail@servidor.com</h6>
                                        <h6>address: colombo</h6>
                                        <h6>NIC: </h6>

                                    </div>

                                    <!--<div class="span2">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                Action
                                                <span class="icon-cog icon-white"></span><span class="caret"></span>
                                            </a>
                                             <ul class="dropdown-menu">
                                                <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                                                <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div>

        </div>
    </div>


</div>




</body>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</html>
