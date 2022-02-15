<?php 

include_once('../app/class.php');
$student->AddDatabaseToQueeing();
?>
    <!DOCTYPE html>
    <html lang="en">
    <style>
        body {
            height: 100vh;
        }

        .container {
            height: 100%;
        }
    </style>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MRIS|Admin Account</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- overide css -->
        <link href="../assets/css/main.style.css" rel="stylesheet" />


    </head>

    <body>


        <div class="container d-flex align-items-center justify-content-center">


            <form action="queeing.php" method="POST">
                <div class="card text-center">
                    <div class="card-header">
                        Enter Details
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <!-- <label for="exampleInputEmail1" class="form-label">Enter Name</label> -->
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="Name" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <!-- <label for="exampleInputPassword1" class="form-label"></label> -->
                            <select class="form-select" name="Purpose" aria-label="Default select example">
                                <option selected>Please Select Transaction</option>
                               <?php  $student->DisplayToSelect();?>
                               
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" name="Submit" class="btn btn-primary">Enter</button>

                    </div>
                </div>
            </form>


        </div>
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
    </body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../assets/js/datatables-simple-demo.js"></script>