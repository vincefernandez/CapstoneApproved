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
?>
<?php include('queque-Header.html'); ?>

<body class="sb-nav-fixed">
    <?php include('navbar.php');

    ?>

    <div id="layoutSidenav">
        <?php include('sidebar.php');

        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <table class="table">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Transaction Name</th>
                                    <th>Transaction ID</th>
                                    <th>Transaction Type</th>
                                    <th>Transaction Date & Time</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Transaction Name</th>
                                    <th>Transaction ID</th>
                                    <th>Transaction Type</th>
                                    <th>Transaction Date & Time</th>

                                </tr>
                            </tfoot>
                            <tbody>
                               <?php $student->DisplayTransactions();?>
                            </tbody>
                        </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../assets/js/datatables-simple-demo.js"></script>
</body>

</html>