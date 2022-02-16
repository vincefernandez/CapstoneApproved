<?php
include_once('AdminHeader.html');

include_once('../app/class.php');
session_start();
$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 4) {
        echo 'Hello ' . $_SESSION['login'];
    } else {
        header('location: ../errorPages/err1.php');
    }
} else {
    header('location: ../errorPages/err1.php');
}

$student->SetNextPage();
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
                    <div class="card">
                        <div class="card-header">
                            Now Serving
                        </div>
                        <form action="RRM.php" method="get">
                            <div class="card-body justify-content-center">
                                <?php $student->DisplayQueQueTransfer(); ?>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="row">
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
                </div> -->
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
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