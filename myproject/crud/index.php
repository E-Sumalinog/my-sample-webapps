<?php

include "function.php";
$crud = new crud();
$data = $crud->getData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./jquery/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="#" class="navbar-brand mr-3">My profile</a>
                <div class="navbar-nav ml-auto">
                    <a href="../login/main.php" class="btn btn-danger">Logout</a>
                </div>
        </div> 
    </nav>

    <div class="container">

        <table class="table table-bordered">
            <a href="add.php" class="btn btn-primary">Add product</a>
            <thead>
                <th>PRODUCT ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th colspan="2">ACTION</th>
            </thead>

            <tbody>
                <?php
                
                    if (empty($data)) {
                        
                        echo "No data found";
                    }else{

                        foreach ($data as $key => $value) {
                            
                            echo "<tr>";
                            echo "<td>" .$value['id']. "</td>";
                            echo "<td>" .$value['name']. "</td>"; 
                            echo "<td>" .$value['price']. "</td>";
                            echo "<td><a href='edit.php?id=$value[id]' class='btn btn-success'>Edit</a></td>";
                            echo "<td><a href='delete.php?id=$value[id]' class='btn btn-danger'>Delete</a></td>";
                            echo "</tr>";
                        }
                    }
                
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>