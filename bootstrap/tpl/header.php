<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width,  initial-scale = 1, shrink-to-fit = no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_3.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <title>Сайт туристической компании</title>
</head>

<body class="body-top">
    <div id="content">
        <header class="container container-fluid ">
            <diy class="row">
                <div class="col-3">
                    <img id="logo" src="img/sun.png">
                </div>
                <div class="col-9">
                    <h1>Путешествуйте с нами!</h1>
                </div>
    </div>

    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
        ?>
        <div class="row">
            <div class="col">
                <div class="auth_block">
                    <div class="link_register">
                        <a href="register.php">Регистрация</a>
                    </div>
                    <div class="link_auth">
                        <a href="avtor.php">Авторизация</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col">
                <div id="exit_block">
                    <div id="link_remark">
                        <a href="../remarks.php">Вы можете оставить отзыв</a>
                    </div>
                    <div id="link_exit">
                        <a href="tpl/exit.php">Выход</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
    ?>
    </header>
    </div>