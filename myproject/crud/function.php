<?php

include "connection.php";

class crud{

    protected $connection;

    public function __construct(){
        
        $this->conn = DB::connection();
    }

    public function getData(){

        $query = "SELECT * FROM products ORDER BY id DESC";
        $result = mysqli_query($this->conn, $query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($data){

        $query = "INSERT INTO products (name,price) VALUES ('".$data['name']."','".$data['price']."')";
        
        if (mysqli_query($this->conn, $query)) {
            
            $this->redirect();
        }
    }

    public function getDataById($id){

        $query = "SELECT * FROM products WHERE id=" .$id;
        $result = mysqli_query($this->conn, $query);

        if (empty($id)) {
            
            $this->redirect();
        }
        return (array) $result->fetch_object();
    }

    public function update($data,$id){

        $query = "UPDATE products SET name='".$data['name']."',price='".$data['price']."' WHERE id=" .$id;

        if (mysqli_query($this->conn,$query)) {
            
            $this->redirect();
        }
    }

    public function delete($id){

        $query = "DELETE FROM products WHERE id=" .$id;

        if (mysqli_query($this->conn, $query)) {
            
            $this->redirect();
        }
    }

    private function redirect(){

        header("Location: index.php");
    }
}

?>