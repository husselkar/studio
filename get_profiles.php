<?php
// Include your database connection file
include('dbconnection.php');

// Create an empty array to store the profiles
$profiles = array();

// Prepare the SQL query to fetch the profiles
$sql = "SELECT name, role, experience, specialty, image, email FROM profiles"; // Adjust table and column names accordingly

// Execute the query
$result = $conn->query($sql);

// Check if any profiles are found
if ($result->num_rows > 0) {
    // Fetch the profiles and store them in the $profiles array
    while ($row = $result->fetch_assoc()) {
        $profiles[] = array(
            'name' => $row['name'],
            'role' => $row['role'],
            'experience' => $row['experience'],
            'specialty' => $row['specialty'],
            'image' => $row['image'], // Image name or path (ensure it's correct)
            'email' => $row['email']
        );
    }
    
    // Return the profiles as JSON
    echo json_encode($profiles);
} else {
    // Return an empty array if no profiles are found
    echo json_encode([]);
}

// Close the database connection
$conn->close();
?>
