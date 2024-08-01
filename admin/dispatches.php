<?php include '../config/db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calls</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js'></script>
</head>
<body>
     <?php include 'sidebar.php'; ?>
    <div class="content">
    <div class="topbar" id="topbar">
            <button id="toggleSidebar" class="toggle-button"><span class="material-icons">menu</span></button>
            <div class="topbar-right">
                <span class="material-icons">notifications</span>
                <span class="material-icons">account_circle</span> Juan Masipag
            </div>
        </div>
        <div class="dispatch-container">
            <h3>List of Dispatched Firetrucks</h3>
            <table>
                <thead>
                    <tr>
                        <th>Truck ID</th>
                        <th>Time Dispatched</th>
                        <th>Truck Location</th>
                        <th>Status</th>
                        <th>Fire Location</th>
                        <th>Level</th>
                        <th>Fire Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT truck_id, time_dispatched, truck_location, status, fire_location, level, fire_status FROM dispatched_firetrucks";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['truck_id'] . "</td>";
                            echo "<td>" . $row['time_dispatched'] . "</td>";
                            echo "<td>" . $row['truck_location'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['fire_location'] . "</td>";
                            echo "<td>" . $row['level'] . "</td>";
                            echo "<td>" . $row['fire_status'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No fire trucks dispatched</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="dispatch-main">
                <div class="chat-container">
                    <div class="chat-header">
                        <span class="material-icons">chat</span> Direct Chat
                    </div>
                    <div class="chat-body">
                        <div class="chat-message">
                            <div class="chat-user">Count Dracula</div>
                            <div class="chat-text">How have you been? I was...</div>
                            <div class="chat-time">2/10/2023</div>
                        </div>
                        <div class="chat-message">
                            <div class="chat-user">Sarah Doe</div>
                            <div class="chat-text">I will be waiting for...</div>
                            <div class="chat-time">2/15/2023</div>
                        </div>
                        <div class="chat-message">
                            <div class="chat-user">Nadia Jolie</div>
                            <div class="chat-text">I'll call you back at...</div>
                            <div class="chat-time">2/10/2023</div>
                        </div>
                        <div class="chat-message">
                            <div class="chat-user">Nora S. Vans</div>
                            <div class="chat-text">Yes, sure...</div>
                            <div class="chat-time">2/20/2023</div>
                        </div>
                    </div>
                </div>
                <div class="map-container">
                    <h3>Dispatch Map</h3>
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
