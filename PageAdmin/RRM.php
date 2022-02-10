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
   
    <?php
   include('AdminNavbar.php');
   include('AdminSidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="row">
                    <div class="table-responsive">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Incoming Notifications
                            </div>
                            <div class="card-body">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>School/Department</th>
                                            <th>Received By</th>

                                            <th>Date Received</th>
                                            <th>Received By</th>

                                    </thead>
                                    <!-- <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>School/Department</th>
                                        <th>Received By</th>
                                        <th>Date Received</th>
                                        <th>Received By</th>
                                    </tr>
                                </tfoot> -->

                                    <!-- //////////////////// ADD FOOT IF YOU WANT //////////////// -->
                                    <tbody class="table-responsive table align-middle">
                                        <tr>
                                            <td>09222222221</td>
                                            <td>Mang Juan</td>
                                            <td>Quezon City University</td>
                                            <td>Pedro dela Cruz</td>
                                            <td>01/25/2</td>
                                            <td>Done</td>


                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Outgoing Notifications
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Control Number</th>
                                            <th>Date Received</th>
                                            <th>Source Address</th>
                                            <th>Subject Matter</th>
                                            <th>Action Unit</th>
                                            <th>Action taken</th>
                                            <th>Date Release</th>
                                            <th>Received By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Control Number</th>
                                            <th>Date Received</th>
                                            <th>Source Address</th>
                                            <th>Subject Matter</th>
                                            <th>Action Unit</th>
                                            <th>Action taken</th>
                                            <th>Date Release</th>
                                            <th>Received By</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01-2013</td>
                                            <td>12/20/21</td>
                                            <td>Caloocan City</td>
                                            <td>Source11111</td>
                                            <td>action1</td>
                                            <td>Done</td>
                                            <td>01/25/2022</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <i class="fas fa-edit text-center"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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