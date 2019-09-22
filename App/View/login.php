<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/ForumDB/App/public/Css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-primary text-center"><h1>My forum</h1></div>
            <h3>Login</h3>
            <div class ="text-danger text-center" ><h5><b><?= $this->session->getFlash() ?></b></h5></div>
            <form action="" method="post">
                <div class="form-group">
                    <b>Name:</b><br>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <b>Password:</b><br>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="    Ok    ">
                </div>
            </form>

            <a href="http://localhost/ForumDB/App/?_controller=register&_action=contact">
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </a>

        </div>
    </div>

</div>



<hr>
</body>
</html>

<?php
