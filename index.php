<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('inc/links.php'); ?>
    <style>
    div.login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;

    }
    </style>
    <link rel="stylesheet" href="css/custom.css">
    <title>Employee login</title>
</head>

<body class="bg-light">
<?php
    ini_set('display_errors', 0);
    ini_set('log_errors', 0);
    error_reporting(E_ALL);
    // Getting Message From Multiple Pages
    $message = $_GET["message"];
    if ($message) {
        echo "<div class='alert alert-warning alert-dismissible'>
 <i class='bi bi-check2-circle'></i>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>$message</strong>.
</div>";
    }
    ?>
     <!-- Login form for agent start-->
     <div class="login-form rounded bg-white overflow-hidden shadow">
        <form action="actions/login.php" method="post" enctype="multipart/form-data">
            <h4 class="bg-danger text-center text-white py-3">LOGIN PANEL</h4>
            <div class="p-4 text-center ">
                <div class="mb-3">
                    <input name="admin_email" type="email" class="form-control shadow-none text-center"
                        placeholder="Username">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-center align-items-center" >
                <button name="submit" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
               
            </div>
        </form>
    </div>
    <!-- Login form for agent end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

</html>