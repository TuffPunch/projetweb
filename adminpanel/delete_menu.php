<?php

session_start();
if (!(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true)) {
    header("Location: /projetweb/connexion/connexion.php");
}

$errorMessage = "";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get ID
    $id = trim(htmlspecialchars($_GET['id']));

    // Validate username and password (replace with your validation logic)
    if (empty($id)) {
        $errorMessage = "Please pass a valid id";
    }
    // Database connection details (replace with your actual credentials)
    $host = "localhost";
    $dbname = "coffee";
    $db_username = "root";
    $db_password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare a SQL statement to prevent SQL injection (use prepared statements)
        $sql = "DELETE FROM menu WHERE menuId = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();
        header("Location: /projetweb/adminpanel/adminpanel.menu.php");
    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }

    $conn = null;  // Close the database connection
}


?>