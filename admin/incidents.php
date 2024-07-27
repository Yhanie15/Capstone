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
        <div class="incident-container">
            <h3>Incident Reports</h3>
            <table>
                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Location</th>
                        <th>Time Reported</th>
                        <th>Level</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT id AS 'Incident ID', location AS 'Location', time_reported AS 'Time Reported', level AS 'Level', status AS 'Status' FROM incidents";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['Incident ID'] . "</td>";
                            echo "<td>" . $row['Location'] . "</td>";
                            echo "<td>" . $row['Time Reported'] . "</td>";
                            echo "<td>" . $row['Level'] . "</td>";
                            echo "<td>" . $row['Status'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No incidents reported</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
