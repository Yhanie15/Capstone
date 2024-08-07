<?php include '../config/db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Stations</title>
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
        <div class="add-button-container">
            <button class="add-button" onclick="window.location.href='add_firestation.php'"><span class="material-icons">add</span> Add Fire Station</button>
        </div>
        <?php
        if (isset($_GET['message'])) {
            echo "<p class='success-message'>" . htmlspecialchars($_GET['message']) . "</p>";
        }
        ?>
        <div class="fire-station-tables">
            <h2>Fire Station Information</h2>
            
            <?php
            // Fetch fire stations from the database
            $sql = "SELECT * FROM fire_stations ORDER BY district";
            $result = $conn->query($sql);

            // Initialize an array to hold fire stations by district
            $fireStationsByDistrict = [];

            if ($result->num_rows > 0) {
                // Organize fire stations by district
                while($row = $result->fetch_assoc()) {
                    $fireStationsByDistrict[$row["district"]][] = $row;
                }
            }

            // Display all 6 districts
            for ($district = 1; $district <= 6; $district++) {
                echo "<div class='district-group'>";
                echo "<h3>District " . $district . "</h3>";

                if (isset($fireStationsByDistrict[$district])) {
                    echo "<table>
                            <tr>
                                <th>Station Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Number of Trucks</th>
                                <th>Actions</th>
                            </tr>";

                    foreach ($fireStationsByDistrict[$district] as $station) {
                        echo "<tr>
                                <td>" . htmlspecialchars($station["station_name"]) . "</td>
                                <td>" . htmlspecialchars($station["address"]) . "</td>
                                <td>" . htmlspecialchars($station["contact"]) . "</td>
                                <td>" . htmlspecialchars($station["email"]) . "</td>
                                <td>" . htmlspecialchars($station["num_trucks"]) . "</td>
                                <td><a href='view_firestation.php?id=" . htmlspecialchars($station["id"]) . "' class='view-button'>View</a></td>
                              </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "<p>No fire stations in this district.</p>";
                }
                echo "</div>"; // Close district group
            }

            $conn->close();
            ?>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
