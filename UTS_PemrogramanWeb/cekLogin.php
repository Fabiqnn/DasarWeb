<?php
    session_start();

    header('Content-Type: application/json');

    if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
        echo json_encode(['loggedIn' => true]);
    } else {
        echo json_encode(['loggedIn' => false]);
    }
    
?>