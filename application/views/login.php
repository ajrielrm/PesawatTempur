<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
.login,
.image {
  min-height: 100vh;
}

.bg-image {
    background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
  background-size: cover;
  background-position: center center;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
    
    
            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">LOG IN!</h3>
                                <p class="text-muted mb-4">Welcome Login here.</p>
                                <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="text-start">
                                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control" id="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log in</button>
                                    <div class="text-center d-flex justify-content-between mt-4"><p>If you dont have an account <a href="register" class="font-italic text-muted"> 
                                            <u>Register here</u></a></p></div>
                                            <div style="color: red;" class="mb-3">
    <?php
    
    if($this->session->flashdata('message')){ 
      echo $this->session->flashdata('message'); 
    }
    ?>
    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
    
        </div>
    </div>

</body>
</html>