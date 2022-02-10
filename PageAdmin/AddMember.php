<?php
include_once('AdminHeader.html');

include_once('../app/class.php');

session_start();
$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 001) {
        echo 'Hello ' . $_SESSION['login'];
    } else{
        header('location: ../errorPages/err1.php');
    }
}else{
    header('location: ../errorPages/err1.php');
}
?>











<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand p-3" href="index.html">R M I S<img src="../assets/img/logo.jpg" class=" float-right img-fluid ml-5" style="height:40px; width:50px; margin-left:15px;"> </a>


        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Employee Name" aria-label="Employee Name" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->


            <span class="d-none d-lg-inline text-white">Vincent Fernandez</span>


        </form>
        <!-- Navbar-->

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a href="#" style="text-decoration: none;"><span class="dropdown-item text-black"><i class="fas fa-user fa-2x"></i> Vincent Fernandez</a></span>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../app/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php
     include('AdminNavbar.php');
     include('AdminSidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add Member</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>

                <div class="row">

                    <div class="col-12 mb-4">
                        <p>Permission</p>
                        <select class="form-select form-select-lg mb-3 bg-secondary text-white" aria-label=".form-select-lg example">
                            <option selected>Select Permission </option>
                            <option value="1" class="bg-white text-black">One</option>
                            <option value="2" class="bg-white text-black">Two</option>
                            <option value="3" class="bg-white text-black">Three</option>
                        </select>
                    </div>

                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>

                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="First name">
                    </div>
                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="Email Address" aria-label="First name">
                    </div>
                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="First name">
                    </div>

                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="Password" aria-label="First name">
                    </div>

                    <div class="col-6 mb-4">
                        <input type="text" class="form-control" placeholder="Confrm Password" aria-label="First name">
                    </div>
                    <div class="col-3 mb-4">
                        <label for="Gender"></label>
                        <select class="form-select form-select-lg mb-3 bg-secondary text-white" aria-label=".form-select-lg example" >
                        <option selected class="bg-white text-black">Select Gender</option>
                            <option value="1" class="bg-white text-black">Male</option>
                            <option value="2" class="bg-white text-black">Female</option>
                            <option value="3" class="bg-white text-black">Others</option>
                        </select>
                    </div>
                   

                </div>
                    <div class="d-flex justify-content-start m-auto"></div>
                        <button class="btn btn-primary">Save</button>
                        <button class="btn btn-secondary">Back</button>
                  
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../assets/js/datatables-simple-demo.js"></script>
</body>

</html>