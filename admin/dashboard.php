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
    <script src="../js/script.js"></script>
</body>
</html>
