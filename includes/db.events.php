<?php

    require_once 'dbh.inc.php';

    function checkOpen($date)
    {
        global $conn; // Use the global connection
    
        // Use prepared statement to prevent SQL injection
        $query = "SELECT * FROM eventsavailability WHERE Date = ?";
        $stmt = mysqli_prepare($conn, $query);
    
        if ($stmt === false) {
            die("Error in prepared statement: " . mysqli_error($conn));
        }
    
        mysqli_stmt_bind_param($stmt, "s", $date);
        mysqli_stmt_execute($stmt);
    
        $res = mysqli_stmt_get_result($stmt);
    
        if ($res === false) {
            die('No result from eventsavailability');
        }
    
        $row = mysqli_fetch_assoc($res);
    
        if ($row === null) {
            die('No result row from res');
        }
    
        return $row['availability'] === 'Open';
    }
    
    function getEvents($date)
    {
        global $conn; // Use the global connection
    
        // Use prepared statement to prevent SQL injection
        $query = "SELECT * FROM events WHERE date = ?";
        $stmt = mysqli_prepare($conn, $query);
    
        if ($stmt === false) {
            die("Error in prepared statement: " . mysqli_error($conn));
        }
    
        mysqli_stmt_bind_param($stmt, "s", $date);
        mysqli_stmt_execute($stmt);
    
        return mysqli_stmt_get_result($stmt);
    }
    ?>