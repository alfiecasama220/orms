<?php

 // Replace with your actual database host
$db   = "orms_db"; // Replace with your actual database name
// Replace with your actual database password


$tableName = 'reservation_list'; // Replace with your actual table name

// Prepare and execute the SQL query
$query = ("SELECT * FROM $tableName");
$result = $query->fetchAll(FETCH_ASSOC);

// Display the results
foreach ($result as $row) {
    echo "ID: {$row['id']}<br>";
    echo "Code: {$row['code']}<br>";
    echo "Room ID: {$row['room_id']}<br>";
    echo "Check In: {$row['check_in']}<br>";
    echo "Check Out: {$row['check_out']}<br>";
    echo "Full Name: {$row['fullname']}<br>";
    echo "Contact: {$row['contact']}<br>";
    echo "Email: {$row['email']}<br>";
    echo "Address: {$row['address']}<br>";
    echo "Status: {$row['status']}<br>";
    echo "Date Created: {$row['date_created']}<br>";
    echo "Date Updated: {$row['date_updated']}<br>";
    echo "<hr>";
}

// Close the connection
$pdo = null;

?>
