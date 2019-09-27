<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

<a href="http://localhost/ForumDB/App/">
    <button type="submit" class="btn btn-primary" name="exit">EXIT</button>
</a>
<div class="text-primary"><h1>My forum</h1></div>
Hello  <b><?= $this->session->getName(); ?></b>
<br>
<div class ="text-danger" ><h5><b><?= $this->session->getFlash() ?></b></h5></div>
<form action="?_controller=main&_action=add" method="post">
    <div class="form-group">
        <b>Text:</b><br>
        <textarea name="title" cols="50" rows="5"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="  Ok   ">
    </div>
</form>
<hr>
<?php foreach ($main as $m) : ?>
<b><?= $m['name'] ?></b>
<br>
    <b>Text :</b><?=  $m['title']; ?>

<br>
<hr>
<?php endforeach; ?>



</body>
</html>

<?php


