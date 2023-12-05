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
                                <form method="post" action="<?php echo base_url('index.php/register/proses') ?>" class="text-start">
            <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control" id="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control" id="email">
                </div>  
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nomor Telpon</label>

                 <div class="input-group">
     <span class="input-group-text">+65</span>
     <input type="text" aria-label="phone" name=phone class="form-control">
    </div>
    </div>
                <div class="mb-3">
                   <a>Sudah Punya Akun? <a href="<?php echo base_url('login') ?>">Register</a></a>
                </div>
            
                <button type="submit" class="btn btn-primary">Log In</button>
                <div style="color: red;" class="mb-3">
    <?php
    // Cek apakah terdapat session nama message
    if($this->session->flashdata('message')){ // Jika ada
      echo $this->session->flashdata('message'); // Tampilkan pesannya
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