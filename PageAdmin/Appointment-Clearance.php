<?php
include_once('AdminHeader.html');

include_once('../app/class.php');

session_start();


$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 002) {
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
                <h1 class="mt-4">Appointment and Clearances</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Main</li> -->
                   
                    <a href="AddRecord_AC.php">  <button class="btn btn-primary">Add Record</button></a>
                   
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
                                            <th>Control Number</th>
                                            <th>Name</th>
                                            <th>Kind of Documents</th>
                                            <th>View File</th>
                                            <th>School office</th>
                                            <th>File Status</th>
                                            <th>Release By</th>
                                            <th>Received By</th>
                                            <th>Date Received</th>
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
                                    <form action="Appointment-Clearance.php" method="get">
                                            <?php
                                            $student->getAppointmentClearance();
                                            
                                            ?>
                                        </form>
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