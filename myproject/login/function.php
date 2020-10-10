<?php

include "connection.php";
session_start();

class users{

    protected $connection;

    public function __construct(){

        $this->conn = DB::connection();
    }

    public function register($email,$username,$password){

        $query = "INSERT INTO users (email,username,password) VALUES ('".$email['email']."','".$username['username']."','".$password['password']."')";
        $result = mysqli_query($this->conn, $query);
    }

    public function login($username,$password){

        $query = "SELECT * FROM users WHERE username='".$username['username']."' AND password='".$password['password']."'";
        $result = mysqli_query($this->conn, $query);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            
            $_SESSION['login']=true;
            $_SESSION['username']=$rows['username'];
            $_SESSION['password']=$rows['password'];

            if ($username == $username && $password == $password) {
                
                header("Location: ../crud/index.php");
            }
        }else{

            echo "<script>alert('Invalid username or password')</script>";
        }
    }
}

?>