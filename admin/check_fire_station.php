<?php include '../config/db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calls</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js'></script>
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
        <div class="answer-call-container">
            <div class="video-section">
                <div class="video-placeholder">
                    <span class="material-icons">account_circle</span>
                </div>
                <div class="video-controls">
                    <span class="material-icons">videocam_off</span>
                    <span class="material-icons">mic</span>
                    <span class="material-icons">call_end</span>
                </div>
            </div>
            <div class="caller-info-section">
                <h3>Available Nearby Firetruck</h3>
                <table>
                <thead>
                    <tr>
                        <th>Truck ID</th>
                        <th>Station Number</th>
                        <th>Station Name</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM firetrucks";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a href='#'>" . $row['truck_id'] . "</a></td>";
                            echo "<td>" . $row['station_number'] . "</td>";
                            echo "<td>" . $row['station_name'] . "</td>";
                            echo "<td><button class='btn-dispatch'>Dispatch</button> <button class='btn-notify'>Notify</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No firetrucks available</td></tr>";
                    }
                    ?>
                </tbody>
                </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoieWhhbmllMTUiLCJhIjoiY2x5bHBrenB1MGxmczJpczYxbjRxbGxsYSJ9.DPO8TGv3Z4Q9zg08WhfoCQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [121.056269, 14.656903],
            zoom: 14
        });
    </script>
</body>
</html>
