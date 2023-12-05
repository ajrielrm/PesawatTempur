<!-- application/views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Airline Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="userhome.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userhome.html">Pesawat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ruteJalan.html">Rute Perjalanan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="book.html">Booking Ticket</a>
                </li>
                
            </ul>

            <!-- Login and Register on the right -->
            <div class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <p class="mb-0"><?= $this->session->userdata('username'); ?></p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/logout">Log Out</a>
                </li>
            </div>
        </div>
    </nav>

<!-- Banner -->
<div class="jumbotron jumbotron-fluid text-center" style="background-image: url('assets/images/pesawatbg.jpg'); background-size: cover; color: white;">

        <div class="container">
            <h1 class="display-4">Explore the Best Airplane</h1>
            <p class="lead">Discover Your Ideal Flight: Navigate the Skies with Ease at Your Fingertips!</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <h1 class="display-4"></h1>
        <!-- Add more content as needed -->
    </div>

    <div class="container mt-5">
        <h2>Booking Form</h2>
        <form>
            <div class="form-group mb-3">
                <label for="routeID">Route ID:</label>
                <input type="text" class="form-control" id="routeID" name="routeID" required class="form-control rounded-pill border-0 shadow-sm px-4">
            </div>
            <div class="form-group">
                <label for="aircraftID">Aircraft ID:</label>
                <input type="text" class="form-control" id="aircraftID" name="aircraftID" required>
            </div>
            <div class="form-group">
                <label for="bookingDate">Booking Date:</label>
                <input type="date" class="form-control" id="bookingDate" name="bookingDate" required>
            </div>
            <div class="form-group">
                <label for="seatCount">Seat Count:</label>
                <input type="number" class="form-control" id="seatCount" name="seatCount" required>
            </div>
            <div class="form-group">
                <label for="pricePerSeat">Price Per Seat:</label>
                <input type="number" class="form-control" id="pricePerSeat" name="pricePerSeat" required>
            </div>
            <div class="form-group">
                <label for="totalPrice">Total Price:</label>
                <input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>