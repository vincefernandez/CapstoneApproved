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
                <h1 class="mt-4">User Permission</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Main</li> -->

                    <a href="#"> <button class="btn btn-primary">Add Permissions</button></a>

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
                                Permission Name
                                <input type="text" class="form-control m-2" placeholder="Input Name">
                            </div>
                            <div class="card-body">
                                <p>Permission</p>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Permission Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 50%;">Permission Name</th>


                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Administrative Issuance</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Appointment and clearance Issuance</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Certification Authentication and Verifications</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Numerical</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Receiving Internal</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Receiving Routing and Mailing</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>System Administrator</td>

                                            <td class="d-flex justify-content-around">
                                                <button class="btn btn-primary"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                                            </td>
                                        </tr>


                                </table>
                                <div class="d-inline-block">
                                    <button class="btn btn-primary mt-10">Save</button>
                                    <button class="btn btn-secondary mt-10">Back</button>
                                </div>
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