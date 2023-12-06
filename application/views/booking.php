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
    </div>
    <div class="container">
        <h1>Flight List</h1>
    
        <div>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                    <th scope="col">Route ID</th>

                        <th scope="col">Kota</th>
                        <th scope="col">Name</th>
                        <th scope="col">Distances</th>
                        <th scope="col">Aircraft </th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($route) && !empty($route)): ?>
    <?php foreach ($route as $routeItem): ?>
        <tr>
            <td><?= $routeItem->RouteID; ?></td>
            <td><?= $routeItem->OriginCity; ?></td>
            <td><?= $routeItem->DestinationCity; ?></td>
            <td><?= $routeItem->Distance; ?>KM</td>

            <?php
            $flightAircraftID = $routeItem->AirCraftID;

            $matchingAircraftName = '';
            foreach ($aircrafts as $aircraft) {
                if ($aircraft->AircraftID == $flightAircraftID) {
                    $matchingAircraftName = $aircraft->AircraftName;
                    break;
                }
            }
            ?>

            <td><?= $matchingAircraftName; ?></td>

            <td>
                <a href="<?php echo base_url('admin/delete_flight/'.$flightAircraftID); ?>" class="btn btn-danger btn-action">Delete</a>
                <a href="<?php echo base_url('Orders'); ?>" class="btn btn-warning btn-action">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Booking Form</h2>
        <form id="bookingForm" method="post" action="<?php echo base_url('home/addBooking') ?>" class="text-start">

        <div class="form-group">
    <label for="aircraft">Route:</label>
    <select class="form-control" name="route" id="aircraft">
    <?php foreach ($route as $row): ?>
            <?php $selected = ($selectedRouteID == $row->RouteID) ? 'selected' : ''; ?>
            <option value="<?php echo $row->RouteID; ?>" <?php echo $selected; ?>>
                <?php echo $row->RouteID; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label for="aircraft">Aircraft:</label>
    <select class="form-control" name="aircraft" id="aircraft">
    <?php foreach ($aircrafts as $row): ?>
            <?php $selected = ($selectedAircraftID == $row->AircraftID) ? 'selected' : ''; ?>
            <option value="<?php echo $row->AircraftID; ?>" <?php echo $selected; ?>>
                <?php echo $row->AircraftName; ?>
            </option>
        <?php endforeach; ?>
    </select>
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
    <script>
    // Add an event listener to the form for input changes
    document.getElementById('bookingForm').addEventListener('input', function () {
        // Get values of seat count and price per seat
        var seatCount = parseFloat(document.getElementById('seatCount').value) || 0;
        var pricePerSeat = parseFloat(document.getElementById('pricePerSeat').value) || 0;

        // Calculate total price
        var totalPrice = seatCount * pricePerSeat;

        // Update the total price input
        document.getElementById('totalPrice').value = totalPrice.toFixed(2); // Adjust as needed
    });
</script>
</body>
</html>