<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Airline Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: white;
            color: #007bff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            color: #007bff;
            margin-bottom: 30px;
        }

        .btn-action {
            margin-left: 8px;
        }

        .table th, .table td {
            text-align: center;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Airline Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="flight">Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Travel Routes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Booking Tickets</a>
                </li>
            </ul>

            <!-- User Info and Register on the right -->
            <div class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <p class="mb-0"><?= $this->session->userdata('username'); ?></p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/logout">Log Out</a>
                </li>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to our Airline Admin Panel</h1>
            <p class="lead">Manage users and operations with ease.</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <h1>User List</h1>
    
        <div>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($users) && !empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->UserID; ?></td>
                                <td><?= $user->Username; ?></td>
                                <td><?= $user->Email; ?></td>
                                <td><?= $user->PhoneNumber; ?></td>
                                <td><?= $user->permission == 1 ? 'Admin' : 'User'; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/delete_user/'.$user->UserID); ?>" class="btn btn-danger btn-action">Delete</a>
                                    <a href="<?php echo base_url('Orders'); ?>" class="btn btn-warning btn-action">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
``
