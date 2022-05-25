<?php
    include("connection.php");
    // remove all session variables
    session_unset();
    
    // destroy the session
    session_destroy();
    
    header("Location:redirector.php");
?>