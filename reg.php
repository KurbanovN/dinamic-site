<?php include("path.php"); ?>
<?php include("app/database/db.php");
?>
<?php
if(isset($_POST['button-reg'])){
    tt($_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font AWESOME -->
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>BrainBoost</title>
</head>
<body>

<?php include("app/include/header.php"); ?>
<!-- END HEADER -->
<!--REGISTR START-->
<div class="container reg_form">
<form class="row justify-content-center" method="post" action="reg.html">
   <h2>Форма регистрации</h2>
    <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Ваша почта</label>
        <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Мы не распространяем ваши данные!</div>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name="pass-first" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
        <input name="pass-second" class="form-control" id="exampleInputPassword2">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <button type="button" class="btn btn-secondary">Отправить</button>
        <a href="aut.html">Авторизация</a>
        </div>
</form>
</div>
<!--REGIST END-->
<!-- footer -->
<?php include("app/include/footer.php"); ?>

        </div>
    </div>
</div>
