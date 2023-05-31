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

<!-- main -->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Заголовок Как себя будет вести тут он там</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image1.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольные статьи на тему обучения... </a>
                    </h3>
                    <i class="far fa-user">AVTOR IMYA</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                    <p class="preview-text">
                        BLA BLA BLABLA BLA BLABLA.
                    </p>
                </div>
            </div>


            <!-- sidebar Content -->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="/" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово..." >
                    </form>
                </div>


                <div class="section topics">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="#">Poems</a> </li>
                        <li><a href="#">Quotes</a> </li>
                        <li><a href="#">Fiction</a> </li>
                        <li><a href="#">Biography</a> </li>
                        <li><a href="#">Motivation</a> </li>
                        <li><a href="#">Inspiration</a> </li>
                        <li><a href="#">Life lessons</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- block main end -->
<!-- footer -->

<?php include("app/include/footer.php"); ?>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>