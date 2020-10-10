<?php

include "function.php";
$crud = new crud();
$data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $crud->update($_POST,$_POST['id']);
    }else{

        parse_str($_SERVER['QUERY_STRING'], $output);
        $id = isset($output['id']) ? $output['id'] : null;
        $data = $crud->getDataById($id);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./jquery/style.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="col-md-4">
        <h2>Update product</h2>
                <input type="hidden" name="id" value="<?=$data['id']?>">
            Name: <input type="text" name="name" class="form-control" value="<?=$data['name']?>" required><br>
            Price: <input type="text" name="price" class="form-control" value="<?=$data['price']?>" required><br>
                    <input type="submit" class="btn btn-primary" value="UPDATE">
    </form>
</body>
</html>