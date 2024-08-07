<?php
include '../config/db_connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stationName = $_POST['stationName'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $district = $_POST['district'];
    $numTrucks = $_POST['numTrucks']; // Added this line to get number of trucks input

    // Prepare the SQL statement
    $sql = "INSERT INTO fire_stations (station_name, address, contact, email, district, num_trucks) VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssi", $stationName, $address, $contact, $email, $district, $numTrucks);

        if ($stmt->execute()) {
            // Redirect to the fire stations page with a success message
            header("Location: firestations.php?message=Fire station added successfully");
            exit();
        } else {
            $error_message = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error_message = "Error: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fire Station</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <div class="content" id="main-content">
        <div class="topbar" id="topbar">
            <button id="toggleSidebar" class="toggle-button"><span class="material-icons">menu</span></button>
            <div class="topbar-right">
                <span class="material-icons">notifications</span>
                <span class="material-icons">account_circle</span> Juan Masipag
            </div>
        </div>
        <div class="form-container">
            <h2>Add Fire Station</h2>
            <?php
            if (isset($error_message)) {
                echo "<p class='error-message'>" . htmlspecialchars($error_message) . "</p>";
            }
            ?>
            <form action="add_firestation.php" method="POST">
                <label for="stationName">Station Name:</label>
                <input type="text" id="stationName" name="stationName" required>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="district">District:</label>
                <select id="district" name="district" required>
                    <option value="1">District 1</option>
                    <option value="2">District 2</option>
                    <option value="3">District 3</option>
                    <option value="4">District 4</option>
                    <option value="5">District 5</option>
                    <option value="6">District 6</option>
                </select>

                <label for="numTrucks">Number of Trucks:</label> <!-- New input field -->
                <input type="number" id="numTrucks" name="numTrucks" required>

                <button type="submit" class="submit-button">Add Fire Station</button>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
