<?php include '../config/db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoieWhhbmllMTUiLCJhIjoiY2x5bHBrenB1MGxmczJpczYxbjRxbGxsYSJ9.DPO8TGv3Z4Q9zg08WhfoCQ';
            var map = new mapboxgl.Map({
                container: 'map_dashboard',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [121.0437, 14.6760], // Coordinates of Quezon City
                zoom: 12
            });

            var marker = new mapboxgl.Marker()
                .setLngLat([121.0437, 14.6760])
                .addTo(map);
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>SAGIP-SIKLAB</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php" class="active"><span class="material-icons">dashboard</span> Dashboard</a></li>
            <li><a href="calls.php"><span class="material-icons">phone</span> Calls</a></li>
            <li><a href="incidents.php"><span class="material-icons">report</span> Incidents</a></li>
            <li><a href="dispatches.php"><span class="material-icons">local_shipping</span> Dispatches</a></li>
            <li><a href="firetrucks.php"><span class="material-icons">local_fire_department</span> Fire Trucks</a></li>
            <li><a href="report.php"><span class="material-icons">assignment</span> Report</a></li>
        </ul>
        <div class="sidebar-footer">
            <a href="logout.php"><span class="material-icons">logout</span> Logout</a>
        </div>
    </div>
    <div class="content">
        <div class="topbar">
            <div class="topbar-right">
                <span class="material-icons">notifications</span>
                <span class="material-icons">account_circle</span> Juan Masipag
            </div>
        </div>
        <div class="header">
            <div class="stats">
                <div class="stat-item blue">Total Incidents Report Today<br>10</div>
                <div class="stat-item yellow">Active Incidents<br>2</div>
                <div class="stat-item green">Dispatched Fire Trucks<br>6</div>
                <div class="stat-item red">Number of Calls Today<br>20</div>
                <div class="stat-item orange">Resolved Incidents<br>10</div>
            </div>
        </div>
        <div class="map_dashboard" id="map_dashboard">
        </div>
    </div>
</body>
</html>
