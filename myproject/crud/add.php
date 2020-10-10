<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./jquery/style.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="col-md-4">
        <h2>Add product</h2>
            Name: <input type="text" name="name" class="form-control" required><br>
            Price: <input type="text" name="price" class="form-control" required><br>
                    <input type="submit" class="btn btn-primary">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include "function.php";
    $crud = new crud();
    $crud->insert($_POST);
}

?>