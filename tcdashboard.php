<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>
<html>
    <head>
        <title>Telecaller Dashboard</title>
    </head>
    <body>
        <h1>Welcome to the Telecaller Dashboard</h1>
        <p>Here, you can manage Telecaller tasks.</p>
        <h2>List of Leads</h2>
        <ul>
            <li>Lead 1:  Doe</li>
            <li>Lead 2:  Smith</li>
            <li>Lead 3:  Johnson</li>
            <!-- Add more leads as needed -->
        </ul>
        <p><a href='admin_tasks.php'>Go to Telecaller Tasks</a></p>
    </body>
    </html>

   
