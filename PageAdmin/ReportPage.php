<?php

include_once('AdminHeader.html');
/*
include_once('../app/class.php');

session_start();

if (isset($_SESSION['Position']) && !empty($_SESSION['Account'])) {
    if ($_SESSION['Account'] == "Reciever") {
        echo 'Hello ' . $_SESSION['Account'];
    } else {
        header('location: ../errorPages/err1.php');
    }
} */
?>











<body class="sb-nav-fixed"> 
    <?php /*
    include_once('AdminSidebar.php');
    */?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center lead h1 display-2">Report Form</h1>
                    </div>
                </div>
                <!-- <h1 class="mt-4">Add Member</h1>
                <ol class="breadcrumb mb-4">
           <li class="breadcrumb-item active">Dashboard</li> 
                </ol> -->

                <div class="row">

                    <div class="col-12 mb-4">
                        <p class="text-muted">Enter the following details</p>
                        <select class="form-select form-select-lg mb-3 bg-secondary text-white" aria-label=".form-select-lg example">
                            <option selected>What do you want to report? </option>
                            <option value="1" class="bg-white text-black">Change Pass</option>
                            <option value="2" class="bg-white text-black">Change 1</option>
                            <option value="3" class="bg-white text-black">Change 2</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="card-header mb-4">
                                <p>Profile of the Employee</p>
                            </div>
                        </div>
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
                    <div class="col-4 mb-4">
                        <label for="Gender"></label>
                        <select class="form-select form-select-lg mb-3 bg-secondary text-white" aria-label=".form-select-lg example">
                            <option selected class="bg-white text-black">Select Gender</option>
                            <option value="1" class="bg-white text-black">Male</option>
                            <option value="2" class="bg-white text-black">Female</option>
                            <option value="3" class="bg-white text-black">Others</option>
                        </select>
                    </div>


                </div>
                <div class=" align-content: stretch ">
                <button class="btn btn-primary ">Save</button>
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