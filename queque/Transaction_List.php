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

$student->DeleteQueueTransctions();
$student->AddTransactionType();
?>
<?php include('queque-Header.html'); ?>

<body class="sb-nav-fixed">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="Transaction_List.php" method="GET">
                       
                        <div class="mb-3">
                            <?php $student->Edit();?>
                            <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
                        </div>
                
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <?php include('navbar.php');

    ?>

    <div id="layoutSidenav">
        <?php include('sidebar.php');

        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="row">
                    <div class="container-fluid px-4">

                        <div class="card">

                            <div class="card-header">
                                Transaction Form
                            </div>
                            <div class="card-body">
                                <form action="Transaction_List.php" method="POST">
                                    <div class="mb-3 m-auto col-12">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="Transaction_Type" aria-describedby="emailHelp" required>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>

                                    <button type="submit" name="Submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="container-fluid px-4">
                        <div class="card">
                            <div class="card-header">
                                All Transaction Type
                            </div>



                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Transaction Type</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <form action="Transaction_List.php" method="get">
                                            <?php $student->DisplayQueueTransactions() ?>
                                        </form>
                                    </tbody>
                                </table>
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