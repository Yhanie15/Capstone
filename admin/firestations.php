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
            <button id="toggleSidebar" class="toggle-button">
                <span class="material-icons">menu</span>
            </button>
            <div class="topbar-right">
                <span class="material-icons">notifications</span>
                <span class="material-icons">account_circle</span> Juan Masipag
            </div>
        </div>

        <div class="header">
            <div class="add-button-container">
                <button class="add-button" onclick="window.location.href='add_firestation.php'">
                    <span class="material-icons">add</span> Add Fire Station
                </button>
            </div>
        </div>

        <?php if (isset($_GET['message'])): ?>
            <p class="success-message"><?= htmlspecialchars($_GET['message']) ?></p>
        <?php endif; ?>

        <div class="fire-station-cards">
            <h2>Fire Station Information</h2>
            
            <?php
            $sql = "SELECT * FROM fire_stations ORDER BY district";
            $result = $conn->query($sql);
            $fireStationsByDistrict = [];

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $fireStationsByDistrict[$row["district"]][] = $row;
                }
            }

            for ($district = 1; $district <= 6; $district++) {
                echo "<div class='district-group'>";
                echo "<h3>District " . $district . "</h3>";

                if (isset($fireStationsByDistrict[$district])) {
                    echo "<div class='cards-container'>";

                    foreach ($fireStationsByDistrict[$district] as $station) {
                        echo "<div class='card'>
                                <img src='../images/station.jpg' alt='" . htmlspecialchars($station["station_name"]) . "' class='card-image'>
                                <div class='card-content'>
                                    <h4>" . htmlspecialchars($station["station_name"]) . "</h4>
                                    <p><span class='material-icons'>call</span> " . htmlspecialchars($station["contact"]) . "</p>
                                </div>
                              </div>";
                    }

                    echo "</div>";
                } else {
                    echo "<p>No fire stations in this district.</p>";
                }
                echo "</div>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
