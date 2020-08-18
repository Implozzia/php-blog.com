<!doctype html>
<html lang="en">
<head>
    <?php
        $website_title = 'PHP Blog';
        require 'blocks/head.php';
    ?>
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