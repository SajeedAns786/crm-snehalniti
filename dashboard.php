<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

// Check the user's role
if ($_SESSION['user_role'] === 'admin') {
    echo "hello admin";
} elseif ($_SESSION['user_role'] === 'teamleader') {
    echo "hello teamleader";
}elseif ($_SESSION['user_role'] === 'telecaller') {
    echo "hello telecaller";
} else {
    // Handle unknown roles or unauthorized access
    echo "Unauthorized access.";
}
?>
