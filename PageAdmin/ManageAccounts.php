<?php

include_once('../app/class.php');

session_start();
$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 001) {
        echo 'Hello ' . $_SESSION['login'];
    } else {
        header('location: ../errorPages/err1.php');
    }
} else {
    header('location: ../errorPages/err1.php');
}
$student->AddAccounts();

?>

<?php include('queque-Header.html'); ?>

<body class="sb-nav-fixed">

    <!-- Button trigger modal -->





    <?php include('navbar.php');

    ?>








    <div id="layoutSidenav">
        <?php include('sidebar.php');

        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="row">
                    <div class="card text-center">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Manage Accounts</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-header text-center">
                        Manage Accounts
                    </div>
                    <div class="col-sm-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Accounts</h5>
                                <p class="card-text">This will manage keme keme</p>
                                <a href="manage-AddAccounts.php" class="btn btn-primary">Go Link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Show All Accounts </h5>
                                <p class="card-text">This will manage keme keme</p>
                                <a href="manage-ShowAccounts.php" class="btn btn-primary">Go Link</a>
                            </div>
                        </div>
                    </div>
                  
                </div>

                <div class="row">
                    <div class="container-fluid px-4">
                        <form method="POST" action="#.php">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">First_Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="First_Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Last_Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Last_Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Middle_Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Middle_Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Position</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Position" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="Email" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="Password" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="CreateAccountSubmit">Submit</button>
                        </form>
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

    <!-- MODAL -->
    <!-- Button trigger modal -->


    <script>
        function checkDeleteItem() {
            //show the confirmation box
            return confirm('Are you sure you want to delete this?');
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../assets/js/datatables-simple-demo.js"></script>
</body>

</html>