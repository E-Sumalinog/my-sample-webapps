<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../crud/jquery/style.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="col-md-4">
        <h2>Registeration</h2>
            Email: <input type="text" name="email" class="form-control" required><br>
            Username: <input type="text" name="username" class="form-control" required><br>
            Password: <input type="password" name="password" class="form-control" required><br>
                        <input type="submit" value="REGISTER" class="btn btn-primary">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include "function.php";
    $users = new users();
    $users->register($_POST,$_POST,$_POST);
    header("Location: main.php");
}

?>