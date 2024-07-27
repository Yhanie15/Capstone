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
        <div class="header">
            <div class="stats">
                <div class="stat-item yellow">Queue Call<br>2</div>
                <div class="stat-item green">Total Calls<br>2</div>
                <div class="stat-item blue">Answered Calls<br>20</div>
                <div class="stat-item purple">Call Duration<br>100 Hours</div>
                <div class="stat-item red">Missed Calls<br>10</div>
            </div>
        </div>
        <div class="calls-container">
            <div class="incoming-calls">
                <h3>Incoming Calls</h3>
                <div class="call">
                    <span>Caller 1</span>
                    <a href="asnwer_call.php"><button class="answer-btn">ANSWER</button></a>
                </div>
                <div class="call">
                    <span>Caller 1</span>
                    <a href="asnwer_call.php"><button class="answer-btn">ANSWER</button></a>
                </div>
                <div class="call">
                    <span>Caller 1</span>
                    <a href="asnwer_call.php"><button class="answer-btn">ANSWER</button></a>
                </div>
                <div class="call">
                    <span>Caller 1</span>
                    <button class="answer-btn">ANSWER</button>
                </div>
                <div class="call">
                    <span>Caller 1</span>
                    <button class="answer-btn">ANSWER</button>
                </div>
            </div>
            <div class="call-log">
                <h3>Call Log</h3>
                <input type="text" placeholder="Search calls...">
                <div class="log">
                    <table>
                    <thead>
                    <tr>
                        <th>Caller ID</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Status</th>
                    </tr>
                </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
