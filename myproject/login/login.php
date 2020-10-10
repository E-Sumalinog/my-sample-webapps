<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../crud/jquery/style.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="col-md-4">
        <h2>LOGIN</h2>
            Username: <input type="text" name="username" class="form-control" required><br>
            Password: <input type="password" name="password" class="form-control" required><br>
                        <input type="submit" value="LOGIN" class="btn btn-primary">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include "function.php";
    $users = new users();
    $users->login($_POST,$_POST);
}

?>