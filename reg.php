<!doctype html>
<html lang="en">
<head>
    <?php
        $website_title = 'Registration';
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
            <h4>Registration form</h4>
            <form action="reg/reg.php" method="post">
                <label for="username">Name</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <button type="submit" class="btn btn-success mt-5">Registration</button>
            </form>
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