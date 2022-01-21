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

            $stmt = $connection->prepare("SELECT * FROM loginusers where Email = ? AND Password = ?");
            $stmt->execute([$Email, $Password]);
            $user = $stmt->fetch(); //Accessing the INFO
            $total = $stmt->rowCount();
            $user1 = $stmt->fetchAll();

            if ($total > 0) {


                session_start();

                $_SESSION['Position'] = $user['Position'];
                if ($_SESSION['Position'] == "releasing") {
                    header("location: pages/recieverAccount.php");
                } elseif ($_SESSION['Position'] == "releasing1") {
                    header("location: pages/releasingAccount.php");
                }
                 elseif ($_SESSION['Position'] == "admin") {
                    header("location: pages/AdminAccount.php");
                } else {
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
        $getUsers = $connection->prepare("SELECT First_Name,Email,Password,Employee_ID FROM loginusers ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();


        foreach ($users as $user) {
            echo " <tr>";
            echo " <td>$user[Employee_ID]</td>";
            echo " <td>$user[First_Name]</td>";
            echo " <td>$user[Email]</td>";
            echo " <td>$user[Password]</td>";
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
    public function get_employee(){
       
            $connection = $this->OpenConnection();
            $getUsers = $connection->prepare("SELECT * FROM loginusers ORDER BY id ASC");
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
