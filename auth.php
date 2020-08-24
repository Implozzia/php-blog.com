<!doctype html>
<html lang="en">
<head>
    <?php
    $website_title = 'Login';
    require 'blocks/head.php';
    ?>
</head>
<body>
<?php
require 'blocks/header.php';
?>
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8 mb-3">
            <?php
                if($_COOKIE['log'] == ''):
            ?>
            <h4>Login</h4>
            <form action="" method="post" class="mt-5">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <div class="alert alert-danger mt-3" id="errorBlock"></div>

                <button type="button" id="auth_user" class="btn btn-success mt-3">Login</button>
            </form>
            <?php
                else:
            ?>
                <h2>User email: <?=$_COOKIE['log']?></h2>
                <button class="btn btn-danger" id="exit_btn">Exit</button>
            <?php
                endif;
            ?>
        </div>
        <?php
        require 'blocks/aside.php';
        ?>
    </div>
</main>
<?php
require 'blocks/footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('#exit_btn').click(function () {
        $.ajax({
            url: 'ajax/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                    document.location.reload(true);
            }
        });
    });

    $('#auth_user').click(function () {
        let email = $('#email').val();
        let pass = $('#pass').val();

        $.ajax({
            url: 'ajax/auth.php',
            type: 'POST',
            cache: false,
            data: {'email' : email, 'pass' : pass},
            dataType: 'html',
            success: function (data) {
                if(data == 'Success') {
                    $('#reg_user').text('Success');
                    $('#errorBlock').hide();
                    document.location.reload(true);
                }
                else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });
</script>


</body>
</html>