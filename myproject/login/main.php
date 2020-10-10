<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDE GUITARS</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script>
        $(document).ready(function(){
            $("h2").hover(function(){
                $(this).fadeOut('6000');
            });
        });

        $(document).ready(function(){
            $("h2").hover(function(){
                $(this).fadeIn('6000');
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
                <a href="#" class="navbar-brand mr-3">CDE GUITARS</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="#about" class="navb-list nav-link">About</a>
                            <a href="#contacts" class="navb-list nav-link">Contacts</a>
                            <a href="#" class="navb-list nav-link">Designs</a>
                            <a href="#" class="navb-list nav-link">Services</a>
                        </div>

                        <div class="navbar-nav ml-auto">
                            <a href="register.php" class="nav-list nav-link">Register</a>
                            <a href="login.php" class="btn btn-primary">Login</a>
                        </div>
                    </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Learn to play with us</h1>
                <p class="lear">Lorem ipsum dolor sit <a href="#">CDE GUITARS</a>, amet consectetur adipisicing elit. At, optio enim. Laborum vero qui accusamus sit! Soluta aut officiis deleniti veniam ad expedita corporis, cum assumenda, omnis nobis esse iure. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam perferendis placeat minus, architecto id illum sunt soluta necessitatibus reprehenderit voluptatibus veniam ullam. Iste suscipit aperiam temporibus nihil est. Sit, reiciendis!</p>
                    <a href="#" class="btn btn-success">Start today</a>
        </div>

        <div class="col-lg-12">
            <h2 style="color:#e34e34" id="about">ABOUT</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni quibusdam nobis accusantium eaque veritatis, cumque natus eius ipsum iste tempore ducimus culpa temporibus dolorum perferendis quasi repellendus tempora in! Quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae, assumenda maiores cum exercitationem error id beatae laboriosam vitae ab repellendus nesciunt temporibus! Asperiores architecto repellendus in quae nulla! Odio!</p>
                    <a href="#" class="alert alert-danger">Free trial</a>
        </div><br><br>

        <div class="row">
            <div class="col-md-4">
                <h2>GUITARS SET</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>

            <div class="col-md-4">
                <h2>GUITARS GADGET</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>

            <div class="col-md-4">
                <h2>GUITAR AMP</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>
        </div><br><br>

        <div class="col-lg-12">
            <h2 style="color:#e34e34" id="contacts">CONTACTS</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni quibusdam nobis accusantium eaque veritatis, cumque natus eius ipsum iste tempore ducimus culpa temporibus dolorum perferendis quasi repellendus tempora in! Quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae, assumenda maiores cum exercitationem error id beatae laboriosam vitae ab repellendus nesciunt temporibus! Asperiores architecto repellendus in quae nulla! Odio!</p>
                    <a href="#" class="alert alert-danger">Free trial</a>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <h2>EDWIN</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>

            <div class="col-md-4">
                <h2>JOHN DOE</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>

            <div class="col-md-4">
                <h2>TAYLOR</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non voluptate enim facere deserunt rerum quia asperiores tempore exercitationem possimus esse ex omnis nesciunt atque quam provident veritatis, illum, adipisci accusantium!locale_filter_matches</p>
            </div>
        </div>
    </div>
</body>
</html>