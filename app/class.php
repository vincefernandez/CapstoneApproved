<?php

class myStudent
{

    private $server = "mysql:host=localhost;dbname=test1";
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
            // $Account = $_POST['Reciever'];

            $stmt = $connection->prepare("SELECT * FROM user1 where email = ? AND password = ?");
            $stmt->execute([$Email, $Password]);
            $user = $stmt->fetch(); //Accessing the INFO
            $total = $stmt->rowCount();
            $user1 = $stmt->fetchAll();

            if ($total > 0) {


                session_start();

                $_SESSION['Account'] = $user['Account'];
                if ($_SESSION['Account'] == "Reciever") {
                    header("location: pages/recieverAccount.php");
                } elseif ($_SESSION['Account'] == "Releasing") {
                    header("location: pages/releasingAccount.php");
                } else {
                    // session_destroy();
                    echo "<div class='alert alert-danger text-center'>Error Please Try Again</div>";
                }
                // if($_SESSION['Account'] == "Releasing"){
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
        $getUsers = $connection->prepare("SELECT * FROM user1 ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();


        foreach ($users as $user) {
            echo " <tr>";
            echo " <td>$user[name]</td>";
            echo " <td>$user[email]</td>";
            echo " <td>$user[password]</td>";
            echo " <td><a href='recieverAccount.php?Delete=$user[id]' class='btn btn-info'>Delete</td>";
            echo " <td><button type='button'  class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>A</button></td>";
            echo " <td><i class='fas fa-trash-alt fa-2x'>$user[id]</i>";
        }

        if(isset($_GET['Delete'])){
            $id = $_GET['Delete'];
            $editusers= $connection ->prepare("Delete From user1 where id =$id");
            $editusers->execute();
        }
       
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
