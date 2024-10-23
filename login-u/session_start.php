<?php
    session_star();
    if (!isset($_SESSION['username'])) {
        header('Location: login-user.html'); 
    }
?>