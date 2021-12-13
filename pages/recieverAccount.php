<?php
include('../app/class.php');

session_start();

if (isset($_SESSION['Account']) && !empty($_SESSION['Account'])) {
  if ($_SESSION['Account'] == "Reciever") {
    echo 'Hello ' . $_SESSION['Account'];
  } else {
    header('location: ../errorPages/err1.php');
  }
}









?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Reciever|Homepage</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="headers.css" rel="stylesheet">
</head>

<body>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="recieverAccount.php" method="GET">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="alert('after click update the database')";>Send message</button>
      </div>
    </div>
  </div>
</div>

  <main>
    <h1 class="visually-hidden">Headers examples</h1>
    <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
          <a href="#NotyetCreated" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="../assets/images/logo.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
          </ul>

          <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-3">
            <p class="text-center fs-3">Reciever Account</p>
          </div>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assets/images/reciever.png" alt="mdo" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li> -->
              <!-- <li><hr class="dropdown-divider"></li> -->
              <li><a class="dropdown-item" href="../app/logout.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- <div class="b-example-divider"></div> -->
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="h1">RECORDS</p>
        </div>

      </div>
      <div class="row">
        <div class="col mb-5">
          <button href="#" class="btn-primary-sm ml-5 H6">HELLO</button>
          <button href="#" class="btn-primary-sm ml-5 h6">HELLO</button>
          <button href="#" class="btn-primary-sm ml-5 h6">HELLO</button>


        </div>
      </div>
    </div>




    <div class="container">
      <div class="row mb-5 border-bottom">
        <div class="col order-first">
          <form>
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          </form>
        </div>

        <div class="col order-last">
          <button class="btn-primary">SEARCH</button>
        </div>


      </div>
      <div>
        <p class="text-muted mb-5 h4 ">Lorem ipsum dolor</p>
      </div>
    </div>





    <table id="example" class="table table" style="width:100%">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Delete</th>
          <th>Edit</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
      <form action="recieverAccount.php" method="get">
        <?php $student->get_users(); ?>
        </form>
      </tbody>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
    </table>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>


  </main>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>