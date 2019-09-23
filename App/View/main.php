<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-primary"><h1>My forum</h1></div>

            <form action="" method="post">
                <div class="form-group">
                    <b>Text:</b><br>
                    <textarea name="text" cols="50" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="    Ok    ">
                </div>
            </form>


        </div>
    </div>

</div>
<hr>

<?foreach($args['main'] as $m): ?>
    <div><?= $m ?></div>
<? endforeach;?>


</body>
</html>

<?php


