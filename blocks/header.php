<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">PHP Blog</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Main Page</a>
    </nav>
    <?php
        if($_COOKIE['log'] == ''):
    ?>
    <a class="btn btn-outline-primary mr-3 " href="/auth.php">Sign Up</a>
    <a class="btn btn-outline-primary" href="/reg.php">Registration</a>
    <?php
        else:
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Profile</a>
    <?php
        endif;
    ?>
</div>