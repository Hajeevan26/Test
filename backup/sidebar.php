<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index1.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Survey</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['user_name']; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index1.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=createsurvey.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Create
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <?php 
if (isset($_SESSION['household_id'])) {
    $id1 = $_SESSION['household_id'];
    $sqlitem = "select * from tblsurvey_question where household_id='$id1' and interviewer_id='$user_id' and status =0 ORDER BY id DESC limit 1";
} else {
    $sqlitem = "select * from tblsurvey_question where interviewer_id='$user_id' and status =0 ORDER BY id DESC limit 1";
}
include('connection/config.php');
     
      $result11 = mysqli_query($con, $sqlitem) or die("error in insert Vehicle Id:" . mysqli_error($con));
           $row1 = mysqli_fetch_assoc($result11);
           $id1 = $row1['household_id'];
       
         if (isset($id1)) 
         { ?>
                <li class="nav-item">
                    <a href="index1.php?pg=survey1.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Household</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey1_2.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> living conditions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey2.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Farm information</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey2a.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Farm information A</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey2b.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Farm information B</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey2c.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Farm information C</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey2d.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Farm information D</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey3_1.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> 3.1 Paddy cultivation inputs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey3_2.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> 3.2 to 3.5 Agro-chemical usage </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey3_6.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> 3.6 Paddy Sales </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey4.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> 4 Debts and credits</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey5.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>5 Debts and credits</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey6.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>6 Decision on conversion</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey7.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>7 Decision on conversion</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index1.php?pg=survey8.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>8 Health and Environmental </p>
                    </a>
                </li>
                <?php 
            } 
                ?>
                <li class="nav-item">
                    <a href="index1.php?pg=sync.php" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>sync </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Logout </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        
                        <p> </p>
                    </a>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>