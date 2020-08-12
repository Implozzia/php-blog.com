<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="img/fav.png">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP-BLOG</title>
</head>
<body>
    <?php
        require 'blocks/header.php';
    ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                Main
            </div>
            <?php
                require 'blocks/aside.php';
            ?>
        </div>
    </main>
    <?php
        require 'blocks/footer.php';
    ?>
</body>
</html>