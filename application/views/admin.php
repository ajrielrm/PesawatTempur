<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card text-center" style="width: 20rem;">
        <img src="https://i.ytimg.com/vi/00xaCn2-HDQ/maxresdefault.jpg" class="card-img-top" alt="Logo">
        <div class="card-body">
            <h5 class="card-title mb-4">Admin Login</h5>
            <form method="post" action="<?php echo base_url('auth/admin_login') ?>" class="text-start">
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" name="username" placeholder="Enter your username" class="form-control" id="username" aria-describedby="usernameHelp">
                    <div id="usernameHelp" class="form-text text-muted">We'll never share your info with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <div style="color: red;" class="mt-3">
                    <?php
                    // Check if there is a flash message
                    if($this->session->flashdata('message')) {
                        echo '<small>' . $this->session->flashdata('message') . '</small>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
                    