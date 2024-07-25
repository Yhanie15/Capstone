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
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>SAGIP-SIKLAB</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php"><span class="material-icons">dashboard</span> Dashboard</a></li>
            <li><a href="calls.php" class="active"><span class="material-icons">phone</span> Calls</a></li>
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
                <h3>Caller Information</h3>
                <form>
                    <label for="caller_name">Name</label>
                    <input type="text" id="caller_name" name="caller_name" value="Value" disabled>
                    
                    <label for="caller_number">Contact Number</label>
                    <input type="text" id="caller_number" name="caller_number" value="Value" disabled>
                    
                    <label for="caller_location">Location</label>
                    <div id="map"></div>
                    
                    <a href="check_fire_station.php"><button type="button" id="check_fire_station">Check Nearby Firetruck</button></a>
                </form>
            </div>
        </div>
    </div>
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