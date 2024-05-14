<?php

// Database connection details (replace with your actual credentials)
$host = "localhost";
$dbname = "coffee";
$username = "root";
$password = "";

try {
  // Connect to the database using PDO
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Query to select all menu items
  $sql = "SELECT * FROM menuitem";

  // Prepare and execute the query
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // Fetch all results as an associative array
  $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Encode the menu items array into JSON format
  $jsonData = json_encode($menuItems);

  // Return the JSON data as the response
  echo $jsonData;

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;  // Close the database connection

?>
