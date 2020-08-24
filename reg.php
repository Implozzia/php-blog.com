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
            <form action="" method="post">
                <label for="username">Name</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <div class="alert alert-danger mt-3" id="errorBlock"></div>

                <button type="button" id="reg_user" class="btn btn-success mt-5">Registration</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('#reg_user').click(function () {
       let name = $('#username').val();
       let email = $('#email').val();
       let pass = $('#pass').val();

       $.ajax({
          url: 'ajax/reg.php',
          type: 'POST',
          cache: false,
          data: {'username' : name, 'email' : email, 'pass' : pass},
           dataType: 'html',
           success: function (data) {
              if(data == 'Success') {
                  $('#reg_user').text('Success');
                  $('#errorBlock').hide();
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