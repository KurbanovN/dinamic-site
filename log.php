<?php include("path.php"); ?>
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
  <form class="row justify-content-center" method="post" action="log.htm">
    <h2 class="col-12">Авторизация</h2>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="button" class="btn btn-secondary">Войти</button>
      <a href="aut.html">Зарегистрироваться</a>
    </div>
  </form>
</div>
<!--REGIST END-->

<?php include("app/include/footer.php"); ?>

    </div>
  </div>
</div>
