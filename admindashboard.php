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
        <title>Admin Dashboard</title>
    </head>
    <body>
        <h1>Welcome to the Admin Dashboard</h1>
        <p>Here, you can manage administrative tasks.</p>
        <h2>List of Leads</h2>
        <ul>
            <li>Lead 1: John Doe</li>
            <li>Lead 2: Jane Smith</li>
            <li>Lead 3: Bob Johnson</li>
            <!-- Add more leads as needed -->
        </ul>
        <p><a href='admin_tasks.php'>Go to Admin Tasks</a></p>
    </body>
    </html>

   
