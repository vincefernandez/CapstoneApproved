<?php
include_once('AdminHeader.html');

include_once('../app/class.php');

session_start();
$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 4) {
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
                <h1 class="mt-4">Manage Administrative Issuance</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Main</li> -->

                    <a href="#"> <button class="btn btn-primary">Add Record</button></a>

                </ol>
                <!-- <div class="row">
                    <div class="card-header">
                    <a href="#">  <button class="btn btn-primary">Add Record</button></a>
                    </div>
                </div> -->

                <div class="row">
                    <div class="table-responsive">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Database Name
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Control Number/Memo Number</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Release By</th>
                                            <th>Received By</th>
                                            <th>Date Received</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Control Number/Memo Number</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Release By</th>
                                            <th>Received By</th>
                                            <th>Date Received</th>

                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>21-03899</td>
                                            <td>Vincent Fernandez</td>
                                           
                                            <td>01/25/2022</td>
                                           
                                            <td>Juan Dela Cruz</td>
                                            <td>SomeOne</td>
                                            <td>01/25/2022</td>
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