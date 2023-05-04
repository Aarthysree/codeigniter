<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css">
    <title>Login</title>
</head>

<body>
    <form class="form-signin" action="<?php echo base_url('index.php/admin/Login/login_post') ?>" method="post">
        <?php
        if ($error != "NO_ERROR") {
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Invalid';
            echo '</div>';
        }
        ?>

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placholder="enter email address"
            required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control"
            placholder="enter password address" required="" autofocus="">

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

    </form>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->


</body>

</html>