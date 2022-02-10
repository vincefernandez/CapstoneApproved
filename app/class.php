<?php

class myStudent
{

    private $server = "mysql:host=localhost;dbname=records";
    private $user = "root";
    private $pass = "";


    private $option = array(
        PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>
        PDO::FETCH_ASSOC
    );
    protected $con;

    public function OpenConnection()
    {

        try {

            $this->con = new PDO($this->server, $this->user, $this->pass, $this->option);
            return $this->con;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }

    public function closeConnection($con)
    {

        $this->$con = null;
    }



    public function loginUser()
    {


        $connection = $this->OpenConnection();


        if (isset($_POST['submit'])) {


            $Email = $_POST['email'];
            $Password = $_POST['password'];
            // $Position = $_POST['Reciever'];

            $stmt = $connection->prepare("SELECT * FROM users_tbl where Email = ? AND Password = ?");
            $stmt->execute([$Email, $Password]);
            $user = $stmt->fetch(); //Accessing the INFO
            $total = $stmt->rowCount();
            $user1 = $stmt->fetchAll();

            if ($total > 0) {


                session_start();

                // $_SESSION['Position'] = $user['Position'];

                $_SESSION['login'] = $user['Employee_ID'];



                if ($_SESSION['login'] == 1) {
                    header("location: pageAdmin/AdminAccount.php");
                    $_SESSION['login'] = $user['Employee_ID'];
                    $user['Employee_ID'] = $_SESSION['login'];


                } elseif ($_SESSION['login'] == 2) {
                    header("location: pageAdmin/Appointment-Clearance.php");
                    $_SESSION['login'] = $user['Employee_ID'];
                    $user['Employee_ID'] = $_SESSION['login'];


                } elseif ($_SESSION['login'] == 3) {
                    $_SESSION['login'] = $user['Employee_ID'];
                    header("location: pageAdmin/Numerical-Communications.php");
                    $user['Employee_ID'] = $_SESSION['login'];
                } elseif ($_SESSION['login'] == 4 ){
                    $_SESSION['login'] = $user['Employee_ID'];
                    header("location: pageAdmin/RRM.php");
                    $user['Employee_ID'] = $_SESSION['login'];
                }
                 else {
                    // session_destroy();
                    echo "<div class='alert alert-danger text-center'>Error Please Try Again</div>";
                }
                // if($_SESSION['Position'] == "Releasing"){
                //     echo"releasing";
                // }


            } else {
                // echo "<script> alert ('Error Please Try Again'); </script>";
                echo "<div class='alert alert-danger text-center'>Error Please Try Again</div>";
            }
        }
    }

    public function logout()
    {

        session_start();

        session_destroy();
        header("location: ../index.php");
    }

    public function get_users()
    {
        $connection = $this->OpenConnection();
        $getUsers = $connection->prepare("SELECT Employee_ID,First_Name,Last_Name,Email,Password,Permission FROM users_tbl ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();


        foreach ($users as $user) {
            echo " <tr>";
            echo " <td>$user[Employee_ID]</td>";
            echo " <td>$user[First_Name] $user[Last_Name]</td>";

            echo " <td>$user[Email]</td>";
            echo " <td>$user[Password]</td>";
            echo " <td>$user[Permission]</td>";


            echo "  <td>
                <button class='btn btn-warning'><i class='fas fa-edit fa-1x'></i></button>
                <button class='btn btn-danger'><i class='fas fa-trash'></i></button>
             </td>";



            // echo " <td><a href='Managemembers.php?Delete=$user[Employee_ID]' class='btn btn-info d-inline-block'>Delete
            //            <a href='#EDITUSER' class='btn btn-primary d-inline-block'>Edit</td>";
            // echo "</tr>";


        }

        // if(isset($_GET['Delete'])){
        //     $id = $_GET['Delete'];
        //     $editusers= $connection ->prepare("Delete From user1 where id =$id");
        //     $editusers->execute();
        // }

    }
    public function get_employee()
    {

        $connection = $this->OpenConnection();
        $getUsers = $connection->prepare("SELECT * FROM users_tbl ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();


        foreach ($users as $user) {
            echo "<tr>";
            echo " <th scope='row'>$user[id]</th> ";
            echo " <td>$user[Employee_ID]</td>";
            echo " <td>$user[First_Name]</td>";
            echo " <td>$user[Last_Name]</td>";
            echo " <td>$user[Middle_Name]</td>";
            echo " <td>$user[Position]</td>";
            echo " <td>$user[Email]</td>";
            echo " <td>$user[Age]</td>";
            echo " <td>$user[Contact_Number]</td>";
            echo " <td>$user[Password]</td>";
            echo "  <td>
                <button class='btn btn-warning'><i class='fas fa-edit fa-1x'></i></button>
                <button class='btn btn-danger'> <i class='fas fa-trash-alt fa-1x'></i></button>
             </td>";
            echo "</tr>";
            // echo " <td><a href='recieverPosition.php?Delete=$user[id]' class='btn btn-info'>Delete</td>";
            // echo " <td><button type='button'  class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>A</button></td>";
            // echo " <td><i class='fas fa-trash-alt fa-2x'>$user[id]</i>";
        }

        // if(isset($_GET['Delete'])){
        //     $id = $_GET['Delete'];
        //     $editusers= $connection ->prepare("Delete From user1 where id =$id");
        //     $editusers->execute();
        // }


    }
    public function getFullName()
    {
        $Employee_ID = $_SESSION['login'];
        $connection = $this->OpenConnection();
        $getUsers = $connection->prepare("SELECT First_Name,Last_Name FROM users_tbl Where Employee_ID = $Employee_ID ");
        $getUsers->execute();
        $users = $getUsers->fetchAll();

        foreach ($users as $user) {
            echo $user['First_Name'] . ' ' . $user['Last_Name'];
        }
    }

    public function IssetGET()
    {
        $connection = $this->OpenConnection();

        if (isset($_GET['Delete'])) {
            $deleteID = $_GET['Delete'];
            $getUsers = $connection->prepare("Delete FROM users_tbl Where Employee_ID = $deleteID");
            $getUsers->execute();
        }
    }

    //     public function InsertAppointmentClearance()
    //     {
    //         $connection = $this->OpenConnection();
    //         if (isset($_POST['Submit'])) {


    //             $Control_Number = $_POST['Control_Number'];
    //             $First_Name = $_POST['First_Name'];
    //             $Last_Name = $_POST['Last_Name'];
    //             $Documents = $_POST['Documents'];
    //             $School_Office = $_POST['School_Office'];
    //             $File_Status = $_POST['File_Status'];
    //             $ForRelease = $_POST['ForRelease'];
    //             $File = $_POST['File'];
    //             // $first_Name = $_POST['First_Name'];
    //             // $first_Name = $_POST['First_Name'];
    //             // $first_Name = $_POST['First_Name'];


    //             $sql = "INSERT INTO appointment_clearancetbl(Control_Number,First_Name,Last_Name,Documents,File,School_Office,File_Status,ForRelease)
    // VALUES('$Control_Number','$First_Name','$Last_Name','$Documents','asda','$School_Office','$File_Status','$ForRelease')";


    //             $connection->exec($sql);

    //             echo "Success";
    //         }


    //     }

    public function Upload()
    {
        $connection = $this->OpenConnection();
        if (isset($_POST['save'])) { // if save button on the form is clicked
            // name of the uploaded file
            $Control_Number = $_POST['Control_Number'];
            $First_Name = $_POST['First_Name'];
            $Last_Name = $_POST['Last_Name'];
            $Documents = $_POST['Documents'];
            $School_Office = $_POST['School_Office'];
            $File_Status = $_POST['File_Status'];
            $ForRelease = $_POST['ForRelease'];
            $filename = $_FILES['myfile']['name'];

            // destination of the file on the server
            $destination = 'uploads/' . $filename;

            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myfile']['tmp_name'];
            $size = $_FILES['myfile']['size'];

            if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                echo "You file extension must be .zip, .pdf or .docx";
            } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
                echo "File too large!";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    $sql = "INSERT INTO appointment_clearancetbl (Control_Number,First_Name,Last_Name,Documents,File,School_Office,File_Status,ForRelease) 
                    VALUES ('$Control_Number','$First_Name','$Last_Name','$Documents','$filename','$School_Office','$File_Status','$ForRelease')";
                    $connection->exec($sql);
                    echo "File Upload Success";
                } else {
                    echo "Failed to upload file.";
                }
            }
        }
    }

    public function getAppointmentClearance()
    {
        $connection = $this->OpenConnection();
        $getUsers = $connection->prepare("SELECT * FROM appointment_clearancetbl");
        $getUsers->execute();
        $users = $getUsers->fetchAll();


        foreach ($users as $user) {
            echo " <tr>";
            echo " <td>$user[Control_Number]</td>";
            echo " <td>$user[First_Name] $user[Last_Name]</td>";

            echo " <td>$user[Documents]</td>";
            echo " <td><a href='Appointment-Clearance.php?file_id=1'>Download</a></td>";
            echo " <td>$user[School_Office]</td>";
            echo " <td>$user[File_Status]</td>";
            echo " <td>$user[Release_By]</td>";
            echo " <td>$user[Received_By]</td>";
            echo " <td>$user[Date_Received]</td>";
            echo " <td>$user[ForRelease]</td>";

            echo "<td><a href='appointment-clearance.php?Delete=$user[id]'> <button class=' fas fa-trash'></button></a></td>";
            echo "<td><a href='#'> <button class='fas fa-edit'></button></a></td>";
            // echo " <td><a href='#?Delete=$user[Control_Number]' class='btn btn-info d-inline-block'>Delete
            //            <a href='#EDITUSER' class='btn btn-primary d-inline-block'>Edit</td>";
            echo "</tr>";
        }

        // if(isset($_GET['Delete'])){

        //     $connection = $this->OpenConnection();
        //     $Delete = $_GET['Delete'];
        //     $getUsers = $connection->prepare("Delete * FROM appointment_clearancetbl Where id = $Delete");
        //     $getUsers->execute();

        // }




        // if (isset($_GET['file_id'])) {
        //     $Control_Number = $_GET['file_id'];

        // //     // fetch file to download from database.
        // //     $connection = $this->OpenConnection();
        // //     $sql = $connection->prepare("SELECT * FROM appointment_clearancetbl where id=$Control_Number");
        // //    $sql->execute();

        // //     $file = $getUsers->fetchAll();
        // //     $filepath = 'uploads/' . $file['documents'];

        // //     if (file_exists($filepath)) {
        // //         header('Content-Description: File Transfer');
        // //         header('Content-Type: application/octet-stream');
        // //         header('Content-Disposition: attachment; filename=' . basename($filepath));
        // //         header('Expires: 0');
        // //         header('Cache-Control: must-revalidate');
        // //         header('Pragma: public');
        // //         header('Content-Length: ' . filesize('uploads/' . $file['name']));
        // //         readfile('uploads/' . $file['name']);

        // //         // // Now update downloads count
        // //         // $newCount = $file['downloads'] + 1;
        // //         // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$Control_Number";
        // //         // mysqli_query($conn, $updateQuery);
        // //         // $updateQuery->execute();
        // //         // exit;

        //     // }

        // }
        // if(isset($_GET['Delete'])){
        //     $id = $_GET['Delete'];
        //     $editusers= $connection ->prepare("Delete From user1 where id =$id");
        //     $editusers->execute();
        // }

    }

    public function FilesLogic()
    {
        $connection = $this->OpenConnection();
        $getUsers = $connection->prepare("SELECT * FROM appointment_clearancetbl");
        $getUsers->execute();
        $users = $getUsers->fetchAll();
    }






    // public function set_user_data($array){
    //     if(!isset($_SESSION)){
    //         session_start();

    //     }



    //     $_SESSION['userdata'] = array(
    //         "Fullname" => $array['Student_Number']." ".$array['First_Name']." ".$array['Last_Name'],

    //     );

    //     return $_SESSION['userdata'];
    // }

}

$student = new myStudent();
