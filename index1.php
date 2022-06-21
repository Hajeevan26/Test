<?php
if (!isset($_SESSION)) {
	session_start();
}
//$_SESSION['user_id'] = 1;
$user_id = $_SESSION['user_id'];
$role_id = $_SESSION['role_id'];

//$_SESSION['role_id']=1;
$role_id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!--div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div-->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index1.php" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php  include('sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?php


//
if (isset($_GET['pg'])) 
{
include($_GET['pg']); }
 else {
	include("content.php");
}
?>


            <!-- Main content -->

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2022 <a href="https://Titum.lk">Titum.lk</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->

        <script>
        function funhbl() {

            var x = document.getElementById("hbl").value;

            if (x == 2) {
                var data =
                    "<input type='text'  required  name='hblnot' id='hblnot' placeholder='If Not Why' class='form-control'>";
                document.getElementById("loadhblnot").innerHTML = data;
            } else {
                document.getElementById("loadhblnot").innerHTML = "";
            }

        }
        </script>
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>

        <script>

        </script>
        <script>
        $(document).ready(function() {

            $('tr td:first-child input[type="checkbox"]').click(function() {
                //enable/disable all except checkboxes, based on the row is checked or not
                $(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.checked);
            });


            // for 
            $("#1_2_1_e").click(function() {

                // $("#1_2_1_e").change(function() {
                if (this.checked) {
                    console.log("checked");
                    $("#1_2_1_e_oth").show();
                } else {
                    console.log("unchecked");
                    $("#1_2_1_e_oth").hide();
                }
            });
            //household start 1st row



        });
        </script>
        <script>
        function updatef2d() {
            var f2_19 = document.getElementById("2_19").value;

            var household_id = document.getElementById("household_id").value;
            //alert(b6);
            if (f2_19 == 2) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (xmlhttp.readyState == 4 & xmlhttp.status == 200) {
                        document.getElementById("divid2_20").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajaxpage.php?option=update2_19&f2_19=" + f2_19 + "&household_id=" + household_id,
                    true);
                xmlhttp.send();
            } 
            else 
            {

                document.getElementById("divid2_20").innerHTML = "";
                //window.location.href = "http://www.google.com";
            }
        }
        //end select vehicle no
        </script>

        <script>
        function funb3_1_1() {
            var x = document.getElementById("3_1_1").value;
            if (x == 5) {
                var data ="<input type='text'  required  name='3_1_1_oth' id='3_1_1_oth' placeholder='If other Specify' class='form-control'>";
                document.getElementById("divid3_1_1").innerHTML = data;
            } else {
                document.getElementById("divid3_1_1").innerHTML = "";
            }
        }
        </script>
         <script>
        function funb3_2_1() {
            var f3_2_1 = document.getElementById("3_2_1").value;
            var household_id = document.getElementById("household_id").value;
            //alert(b6);
            if (f3_2_1 == 2) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (xmlhttp.readyState == 4 & xmlhttp.status == 200) {
                        document.getElementById("divid3_2_1").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajaxpage.php?option=update3_2_1&f3_2_1=" + f3_2_1 + "&household_id=" + household_id,
                    true);
                xmlhttp.send();
            } 
            else 
            {
                document.getElementById("divid3_2_1").innerHTML = "";
            }
        }
        </script>
        <script>
       function funb4_2() {
            var f4_1 = document.getElementById("4_1").value;
            var household_id = document.getElementById("household_id").value;
            //alert(b6);
            if (f4_1 == 2) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (xmlhttp.readyState == 4 & xmlhttp.status == 200) {
                        document.getElementById("divid4_2").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajaxpage.php?option=update4_2&f4_1=" + f4_1 + "&household_id=" + household_id,
                    true);
                xmlhttp.send();
            } 
            else 
            {
                document.getElementById("divid4_2").innerHTML = "";
            }
        }
        </script>
        <script type="text/javascript">
        function eDoth(ddlModels, bl, tx) {

            var tx = tx;
            var bl = bl;
            console.log(tx);
            var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
            var txtOther = document.getElementById(tx);
            txtOther.disabled = selectedValue == bl ? false : true;
            if (!txtOther.disabled) {
                txtOther.focus();
            }
        }
        </script>
        <script>
        function eDcheckOT(chk, txtot) {

            var checkBox = document.getElementById(chk);
            var text = document.getElementById(txtot);

            console.log(txtot);
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
        </script>

        <script type="text/javascript">
        window.onload = function() {
            //create survey
           
            // eDcheckOT('2_6f','2_6_f_oth');
            eDcheckOT('1_2_1_e','1_2_1_e_oth');
            eDcheckOT('1_2_2_d','1_2_2_d_oth');
            eDcheckOT('1_2_3_d','1_2_3_d_oth');
            eDcheckOT('1_2_4_h','1_2_4_h_oth');
            eDcheckOT('1_2_5_d','1_2_5_d_oth');
            eDcheckOT('1_2_6_f','1_2_6_f_oth');
            eDcheckOT('1_2_9_g','1_2_9_g_oth');
            eDcheckOT('1_2_10_u','1_2_10_u_oth');
            eDcheckOT('1_2_5_d','1_2_5_d_oth');
            // eDcheckOT('2_16j','2_16f_oth');
            
        }
        </script>

        <script>
    function fnsum(a,b,c,d,e,x) {
       var a = document.getElementById(a).value;
       var b = document.getElementById(b).value;
       var c = document.getElementById(c).value;
       var d = document.getElementById(d).value;
       var e = document.getElementById(e).value;
       //var x = document.getElementById(x).value;

       //var txtSecondNumberValue = document.getElementById('txt2').value;
       if (a == "")
         {  a = 0;  } 
       if (b == "")
          { b = 0;}
          if (c == "")
          { c = 0;}
          if (d == "")
          { d = 0;}
          if (e == "")
          { e = 0;}
          

       var result = parseInt(a) + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e);
       if (!isNaN(result)) {
           document.getElementById(x).value = result;
       }
   }
        </script>

<script>
    function fnmulty(a,b,x) {
       var a = document.getElementById(a).value;
       var b = document.getElementById(b).value;
       //var x = document.getElementById(x).value;
//alert(b);
       //var txtSecondNumberValue = document.getElementById('txt2').value;
       if (a == "")
         {  a = 0;  } 
       if (b == "")
          { b = 0;}

       var result = parseInt(a) * parseInt(b);
       if (!isNaN(result)) {
           document.getElementById(x).value = result;
       }
   }
</script>
</body>
</html>