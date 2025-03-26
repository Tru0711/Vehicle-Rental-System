<?php
include("config.php"); // Include your database configuration

// Function to execute queries
function executeQuery($query) {
    global $conn; // Use the global connection variable
    $result = mysqli_query($conn, $query); // Execute the query

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn)); // Output error message if query fails
    }
    return $result; // Return the result of the query
}
?>