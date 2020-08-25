<!doctype html>
<html lang="en">
<head>
    <?php
    $website_title = 'Add article';
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
            <h4>Add article</h4>
            <form action="" method="post">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">

                <label for="intro">Intro</label>
                <input type="text" name="intro" id="intro" class="form-control">

                <label for="text">Text</label>
                <input type="text" name="text" id="text" class="form-control">

                <div class="alert alert-danger mt-3" id="errorBlock"></div>

                <button type="button" id="add_article" class="btn btn-success mt-5">Add</button>
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
    $('#add_article').click(function () {
        let title = $('#title').val();
        let intro = $('#intro').val();
        let text = $('#text').val();

        $.ajax({
            url: 'ajax/add_article.php',
            type: 'POST',
            cache: false,
            data: {'title' : title, 'intro' : intro, 'text' : text},
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