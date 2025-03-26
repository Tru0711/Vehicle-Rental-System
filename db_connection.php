<?php
include("config.php");

// Function to execute queries
function executeQuery($sql) {
    global $conn;
    $result = mysqli_query($conn, $sql);
    return $result;
}
?>
