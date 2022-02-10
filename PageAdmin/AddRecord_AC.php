<?php
include_once('AdminHeader.html');

include_once('../app/class.php');

session_start();

$Employee_ID = $_SESSION['login'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 2) {
        echo 'Hello ' . $_SESSION['login'];
    } else {
        header('location: ../errorPages/err1.php');
    }
} else {
    header('location: ../errorPages/err1.php');
}

// $student->InsertAppointmentClearance();
$student->Upload();
?>











<body class="sb-nav-fixed">

    <?php
    include('AdminNavbar.php');
    include('AdminSidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add New Record</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Main</li> -->

                    <!-- <a href="#"> <button class="btn btn-primary">Add Record</button></a> -->

                </ol>
                <!-- <div class="row">
                    <div class="card-header">
                    <a href="#">  <button class="btn btn-primary">Add Record</button></a>
                    </div>
                </div> -->
                <form action="AddRecord_AC.php" method="post" enctype="multipart/form-data">

                    <h3>Upload File</h3>
                    <input type="file" name="myfile"> <br>
                    <!-- <div class="mb-3 col-4">
                        <label for="exampleInputEmail1" class="form-label">Enter File</label>
                        <input type="file" class="form-control" id="File" name="File" aria-describedby="emailHelp">
                        <button class="btn btn-primary" name="myfile">Upload</button>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> 
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Control Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Control_Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">First_Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="First_Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Last_Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Last_Name">
                    </div>
                    <!-- <div class="mb-3 col-2 -inline-block">
                        <label for="exampleInputPassword1" class="form-label">Suffix Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Suffix">
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kind of Documents</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Documents">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">School Office</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="School_Office">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File Status</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="File_Status">
                    </div>
                     
                    

                    <select class="form-select" class="mb-5" name="ForRelease" aria-label="Default select example">
                        <option selected>For Release?</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>

                    </select>
                    <button type="submit" name="save">upload</button>

                </form>
                <!-- <form action="AddRecord_AC.php" method="POST" enctype="multipart/form-data">
                    

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="Submit">Submit</button>
                </form> -->
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